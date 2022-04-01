@extends('layouts.main')
@section('content')

<div class="card">
    <div class="card-header">
        Join Us
    </div>

    <div class="card-body">
        <form action="{{ route("career") }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group {{ $errors->has('job_id') ? 'has-error' : '' }}">
                <label for="job">{{ trans('cruds.career.fields.job') }}*</label>
                <select name="job_id" id="job" class="form-control select2" required>
                    @foreach($jobs as $id => $job)
                        <option value="{{ $id }}" {{ (isset($career) && $career->job ? $career->job->id : old('job_id')) == $id ? 'selected' : '' }}>{{ $job }}</option>
                    @endforeach
                </select>
                @if($errors->has('job_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('job_id') }}
                    </em>
                @endif
            </div>
            {{-- <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                <label for="nama">{{ trans('cruds.career.fields.nama') }}*</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', isset($career) ? $career->nama : '') }}" required>
                @if($errors->has('nama'))
                    <em class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.career.fields.nama_helper') }}
                </p>
            </div>

            <div class="form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
                <label for="location">{{ trans('cruds.career.fields.location') }}*</label>
                <select name="location_id" id="location" class="form-control select2" required>
                    @foreach($locations as $id => $location)
                        <option value="{{ $id }}" {{ (isset($career) && $career->location ? $career->location->id : old('location_id')) == $id ? 'selected' : '' }}>{{ $location }}</option>
                    @endforeach
                </select>
                @if($errors->has('location_id'))
                    <em class="invalid-feedback">
                        {{ $errors->first('location_id') }}
                    </em>
                @endif
            </div>
            <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                <label for="address">{{ trans('cruds.job.fields.address') }}</label>
                <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($job) ? $job->address : '') }}">
                @if($errors->has('address'))
                    <em class="invalid-feedback">
                        {{ $errors->first('address') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.address_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('categories') ? 'has-error' : '' }}">
                <label for="categories">{{ trans('cruds.job.fields.categories') }}
                    <span class="btn btn-info btn-xs select-all">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all">{{ trans('global.deselect_all') }}</span></label>
                <select name="categories[]" id="categories" class="form-control select2" multiple="multiple">
                    @foreach($categories as $id => $categories)
                        <option value="{{ $id }}" {{ (in_array($id, old('categories', [])) || isset($job) && $job->categories->contains($id)) ? 'selected' : '' }}>{{ $categories }}</option>
                    @endforeach
                </select>
                @if($errors->has('categories'))
                    <em class="invalid-feedback">
                        {{ $errors->first('categories') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.categories_helper') }}
                </p>
            </div>            
            <div class="form-group {{ $errors->has('tgl') ? 'has-error' : '' }}">
                <label for="tgl">{{ trans('cruds.job.fields.tgl') }}</label>
                <input type="datetime-local" id="tgl" name="tgl" class="form-control" value="{{ old('tgl', isset($job) ? $job->tgl : '') }}">
                @if($errors->has('tgl'))
                    <em class="invalid-feedback">
                        {{ $errors->first('tgl') }}
                    </em>
                @endif
                
            </div>

            <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                <label for="photo">{{ trans('cruds.job.fields.photo') }}</label>
                <div class="needsclick dropzone" id="photo-dropzone">

                </div>
                @if($errors->has('photo'))
                    <p class="help-block">
                        {{ $errors->first('photo') }}
                    </p>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.photo_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('short_description') ? 'has-error' : '' }}">
                <label for="short_description">{{ trans('cruds.job.fields.short_description') }}</label>
                <textarea id="short_description" name="short_description" class="form-control ">{{ old('short_description', isset($job) ? $job->short_description : '') }}</textarea>
                @if($errors->has('short_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('short_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.short_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('full_description') ? 'has-error' : '' }}">
                <label for="full_description">{{ trans('cruds.job.fields.full_description') }}</label>
                <textarea id="full_description" name="full_description" class="form-control ">{{ old('full_description', isset($job) ? $job->full_description : '') }}</textarea>
                @if($errors->has('full_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('full_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('cruds.job.fields.full_description_helper') }}
                </p>
            </div>
             --}}
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>


    </div>
</div>


@endsection
{{-- 
@section('scripts')
<script>
    Dropzone.options.photoDropzone = {
    url: '{{ route('admin.jobs.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="photo"]').remove()
      $('form').append('<input type="hidden" name="photo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="photo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($job) && $job->photo)
      var file = {!! json_encode($job->photo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="photo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@stop --}}