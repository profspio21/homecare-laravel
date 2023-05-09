@extends('layouts.main')

@section('content')
<img src="../img/rukunhomecare1.jpg" alt="Rukun Home Care" width="100%">
    <div class="container">
        <div class="rounded-form" style="padding-bottom: 4rem;">
          
          <div class="job-list">
            
              <h2>Lowongan</h2>
            
            @foreach ($jobs as $job)
            <div class="card-job">
              <div class="card-head">
                @if (!empty($job->name))
                  {!!$job->name!!}
                @endif
                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
              </div>
              <div class="card-isi">
                @if (!empty($job->description))
                  {!!$job->description!!}
                @endif
              </div>
            </div>
            <br>
            @endforeach
          </div>
          <div class="apply-now">
            <h2>Form Lamaran</h2>
            <div class="row">
              <a href="https://forms.gle/U9LVMwaKeRRsjXbH8" target="_blank">Klik disini untuk mengisi form lamaran</a>
              
            </div><br>
            <div class="row"><a href="https://bit.ly/joinrukun" target="_blank"><img src="../../img/apply-now.png" alt="apply-now"></a></div>
          </div>
            {{-- <form action="career" id="ft-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                @csrf
                <fieldset>
                  <legend>Form Lamaran</legend>
                  <label>
                    Pekerjaan yang dilamar *
                    
                    <select name="job" required>
                       <option value="" disabled selected>Silahkan pilih</option>
                        @foreach ($jobs as $job)
                        <option value="{!!$job->name!!}">{!!$job->name!!}</option>
                        @endforeach
                    </select>    
                    
                  </label>
                </fieldset>
                <fieldset>
                  <legend>Data Pribadi</legend>
                  <div class="two-cols">
                    <label>
                      Nama
                      <input type="text" name="nama" required>
                    </label>
                    <label>
                      Tanggal lahir
                      <input type="date" name="ttl" required>
                    </label>
                  </div>
                                      
                  <div class="two-cols">
                    <label>
                      Jenis Kelamin
                      <select name="gender" required>
                        <option value="" disabled selected>Silahkan pilih</option>
                        @foreach ($genders as $gender)
                        <option value="{{$gender->name}}">{{$gender->name}}</option>
                        @endforeach
                     </select>
                    </label>
                    <label>
                      Agama
                      <input type="text" name="agama" required>
                    </label>
                  </div>
                  <label>
                    Alamat
                    <input type="text" name="alamat" required>
                  </label>
                  <div class="two-cols">
                    <label>
                      Tinggi badan
                      <input type="text" name="tinggi" required>
                    </label>
                    <label>
                      Berat badan
                      <input type="text" name="berat" required>
                    </label>
                  </div>
                  <div class="two-cols">
                    <label>
                      Nomor HP *
                      <input type="tel" name="no_hp" required>
                    </label>
                    <label>
                      Email *
                      <input type="email" name="email" required>
                    </label>
                  </div>
                </fieldset>
                <fieldset>
                  <legend>Dokumen</legend>
                  <div class="two-cols">
                    <label>
                      Surat Lamaran
                      <div class="needsclick dropzone" id="lamaran-dropzone" style="border: 1px solid">

                      </div>                    
                    </label>
                    <label>
                      CV
                      <div class="needsclick dropzone" id="cv-dropzone" style="border: 1px solid">

                      </div>
                    </label>
                  </div>
                  <p>Masukkan Surat lamaran dan CV dalam bentuk pdf. Maksimum 5 MB.</p>
                </fieldset>
                <div class="btns">
                  <input type="text" name="_gotcha" value="" style="display:none;">
                  <input type="submit" value="Submit application">
                </div>
              </form> --}}

        </div>
    </div>
@endsection


@section('scripts')
<script>
  Dropzone.options.cvDropzone = {
  url: '{{ route('career.storeMedia') }}',
  maxFilesize: 10, // MB
  acceptedFiles: '.doc,.docx,.pdf',
  maxFiles: 1,
  addRemoveLinks: true,
  headers: {
    'X-CSRF-TOKEN': "{{ csrf_token() }}"
  },
  success: function (file, response) {
    $('form').find('input[name="cv"]').remove()
    $('form').append('<input type="hidden" name="cv" value="' + response.name + '">')
  },
  removedfile: function (file) {
    file.previewElement.remove()
    if (file.status !== 'error') {
      $('form').find('input[name="cv"]').remove()
      this.options.maxFiles = this.options.maxFiles + 1
    }
  },
  init: function () {
@if(isset($career) && $career->cv)
    var file = {!! json_encode($career->cv) !!}
        this.options.addedfile.call(this, file)
    // this.options.thumbnail.call(this, file, file.url)
    file.previewElement.classList.add('dz-complete')
    $('form').append('<input type="hidden" name="cv" value="' + file.file_name + '">')
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
<script>
  Dropzone.options.lamaranDropzone = {
  url: '{{ route('career.storeMedia') }}',
  maxFilesize: 10, // MB
  acceptedFiles: '.doc,.docx,.pdf',
  maxFiles: 1,
  addRemoveLinks: true,
  headers: {
    'X-CSRF-TOKEN': "{{ csrf_token() }}"
  },
  success: function (file, response) {
    $('form').find('input[name="lamaran"]').remove()
    $('form').append('<input type="hidden" name="lamaran" value="' + response.name + '">')
  },
  removedfile: function (file) {
    file.previewElement.remove()
    if (file.status !== 'error') {
      $('form').find('input[name="lamaran"]').remove()
      this.options.maxFiles = this.options.maxFiles + 1
    }
  },
  init: function () {
@if(isset($career) && $career->lamaran)
    var file = {!! json_encode($career->lamaran) !!}
        this.options.addedfile.call(this, file)
    // this.options.thumbnail.call(this, file, file.url)
    file.previewElement.classList.add('dz-complete')
    $('form').append('<input type="hidden" name="lamaran" value="' + file.file_name + '">')
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
@stop