<?php

namespace App\Http\Requests;

use App\Models\Pengaturan;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePengaturanRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pengaturan_edit');
    }

    public function rules()
    {
        return [
            'key' => [
                'string',
                'required',
                'unique:pengaturans,key,' . request()->route('pengaturan')->id,
            ],
        ];
    }
}