@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="rounded-form" style="padding-bottom: 6rem;">
            <form action="career" id="ft-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                <fieldset>
                  <legend>Join Us</legend>
                  <label>
                    Pekerjaan yang dilamar *
                    
                    <select name="Application for" required>
                       <option value="" disabled selected>Silahkan pilih</option>
                        @foreach ($jobs as $job)
                        <option value="{{$job->name}}">{{$job->name}}</option>
                        @endforeach
                    </select>    
                    
                    
                  </label>
                </fieldset>
                <fieldset>
                  <legend>Data Pribadi</legend>
                  
                    <label>
                      Nama
                      <input type="text" name="nama" required>
                    </label>
                  
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
                      <input type="text" name="agama">
                    </label>
                  </div>
                  <label>
                    Alamat
                    <input type="text" name="alamat">
                  </label>
                  <div class="two-cols">
                    <label>
                      Tinggi badan
                      <input type="text" name="tinggi">
                    </label>
                    <label>
                      Berat badan
                      <input type="text" name="berat">
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
                  <legend>Dokumen lamaran</legend>
                  <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                  <div class="two-cols">
                    <label>
                      Surat Lamaran
                      <input type="file" name="lamaran" accept=".doc,.docx,.pdf">
                    </label>
                    <label>
                      CV
                      <input type="file" name="CV" accept=".doc,.docx,.pdf">
                    </label>
                  </div>
                  <p>Masukkan Surat lamaran dan CV dalam bentuk pdf. Maksimum 5 MB.</p>
                </fieldset>
                <div class="btns">
                  <input type="text" name="_gotcha" value="" style="display:none;">
                  <input type="submit" value="Submit application">
                </div>
              </form>
        </div>
    </div>
@endsection