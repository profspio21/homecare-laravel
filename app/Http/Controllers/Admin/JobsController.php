<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Gate;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Http\Controllers\Traits\MediaUploadingTrait;



class JobsController extends Controller
{
    use MediaUploadingTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $jobs = Job::all();

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create()
    {
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobs.create');
    }

    public function store(StoreJobRequest $request)
    {
        $job = job::create($request->all());

        return redirect()->route('admin.jobs.index');
    }

    public function edit(Job $job)
    {
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobs.edit', compact('job'));
    }

    public function update(UpdateJobRequest $request, Job $job)
    {
        $job->update($request->all());

        return redirect()->route('admin.jobs.index');
    }

    public function show(Job $job)
    {
        abort_if(Gate::denies('job_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.jobs.show', compact('job'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        //
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('jobs_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Job();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
