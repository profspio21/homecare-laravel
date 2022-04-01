<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Job;
use App\Models\Gender;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCareerRequest;
use App\Http\Requests\UpdateCareerRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use Symfony\Component\HttpFoundation\Response;

class CareerController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $genders = Gender::all();

        $jobs = Job::all();

        return view('frontend.career', compact('jobs','genders'));
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
}