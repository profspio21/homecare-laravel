<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Gender;
use App\Models\Job;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Traits\MediaUploadingTrait;


class CareersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    use MediaUploadingTrait;

    public function index()
    {

        $careers = Career::all();
        $genders = Gender::all();

        $jobs = Job::all();

        return view('admin.careers.index', compact('careers','jobs','genders'));
    }

    public function store(StoreCareerRequest $request)
    {
        $career = Career::create($request->all());

        if ($request->input('lamaran', false)) {
            $career->addMedia(storage_path('tmp/uploads/' . $request->input('lamaran')))->toMediaCollection('lamaran');
        }
        if ($request->input('cv', false)) {
            $career->addMedia(storage_path('tmp/uploads/' . $request->input('cv')))->toMediaCollection('cv');
        }

        return redirect()->route('frontend.beranda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
        return view('admin.careers.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCareerRequest  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCareerRequest $request, Career $career)
    {
        //
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
}
