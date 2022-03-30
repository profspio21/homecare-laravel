<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPengaturanRequest;
use App\Http\Requests\StorePengaturanRequest;
use App\Http\Requests\UpdatePengaturanRequest;
use App\Models\Pengaturan;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class PengaturanController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('pengaturan_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pengaturans = Pengaturan::all();

        return view('admin.pengaturans.index', compact('pengaturans'));
    }

    public function create()
    {
        abort_if(Gate::denies('pengaturan_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pengaturans.create');
    }

    public function store(StorePengaturanRequest $request)
    {
        $pengaturan = Pengaturan::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $pengaturan->id]);
        }

        return redirect()->route('admin.pengaturans.index');
    }

    public function edit(Pengaturan $pengaturan)
    {
        abort_if(Gate::denies('pengaturan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pengaturans.edit', compact('pengaturan'));
    }

    public function update(UpdatePengaturanRequest $request, Pengaturan $pengaturan)
    {
        $pengaturan->update($request->all());

        return redirect()->route('admin.pengaturans.index');
    }

    public function show(Pengaturan $pengaturan)
    {
        abort_if(Gate::denies('pengaturan_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pengaturans.show', compact('pengaturan'));
    }

    public function destroy(Pengaturan $pengaturan)
    {
        abort_if(Gate::denies('pengaturan_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pengaturan->delete();

        return back();
    }

    public function massDestroy(MassDestroyPengaturanRequest $request)
    {
        Pengaturan::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('pengaturan_create') && Gate::denies('pengaturan_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Pengaturan();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}