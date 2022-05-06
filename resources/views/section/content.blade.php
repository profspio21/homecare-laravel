<section id="isi1">
    <div class="container isi1">
        <div class="jasa">
            <img src="../img/icon.png" alt="Rukun Home Care">
            <div class="row1">
                @if(!empty($pengaturantitle['sec1']))
                {!!$pengaturantitle['sec1']!!}
                @endif
            </div>
            <img src="../img/line.png" alt="">
            <div class="row2">
                @if(!empty($pengaturanisi['sec1']))
                {!!$pengaturanisi['sec1']!!}
                @endif
            </div>
        </div>
    </div>
</section>

<section id="isi2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-header">
                    @if(!empty($pengaturantitle['sec2']))
                    {!!$pengaturantitle['sec2']!!}
                    @endif
                </div>
                @if(!empty($pengaturanisi['sec2']))
                    {!!$pengaturanisi['sec2']!!}
                @endif
            </div>
            <div class="col-lg-6">
                <div class="section-header">
                    @if(!empty($pengaturantitle['sec3']))
                    {!!$pengaturantitle['sec3']!!}
                    @endif
                </div>
                @if(!empty($pengaturanisi['sec3']))
                    {!!$pengaturanisi['sec3']!!}
                @endif
            </div>
        </div>
        
        
    </div>
</section>

{{-- <section id="isi3">
    <div class="container">
        <div class="jasa">
            <h1>Percayakan perawatan senior terkasih Anda pada kami</h1>
            <img src="../img/line.png" alt="">
            <p>
                Segera hubungi kami untuk menanyakan informasinya.
            </p>
        </div>
    </div>
</section> --}}

<section id="seniorliving">
    <div class="container">
        <div class="about-heading">
            @if(!empty($pengaturantitle['sec4']))
                    {!!$pengaturantitle['sec4']!!}
            @endif
        </div>    
        <div class="aboutp col-lg-6">
            @if(!empty($pengaturanisi['sec4']))
                    {!!$pengaturanisi['sec4']!!}
            @endif
        </div> 
    </div>
</section>

<section id="service">
    <div class="service-container">
        <div class="row mleft">
            <div class="col-lg-3 pad20 rukun-options">
                <div class="row ">
                    <div class="list-options">
                        <h2>Ragam Layanan RUKUN</h2>
                        <a href="">Senior Resort</a>
                        <hr>
                        <a href="">Senior Care</a>
                        <hr>
                        <a href="">Senior Club</a>
                        <hr>
                        <a href="">Damentia Day Program</a>
                    </div>
                </div>
                <div class="row isi-title">
                    @if (!empty($pengaturantitle['pertanyaan_terkait_homecare']))
                        {!!$pengaturantitle['pertanyaan_terkait_homecare']!!}
                    @endif
                    @if (!empty($pengaturanisi['pertanyaan_terkait_homecare']))
                        {!!$pengaturanisi['pertanyaan_terkait_homecare']!!}
                    @endif
                    <div class="hubungi">
                        <a href="whatsapp://send?abid=+6285888076790" style="font-weight: 600" target="_blank">Hubungi Kami</a>
                        {{-- <a href="tel:+6285888076790" style="font-weight: 600">Hubungi Kami</a> --}}
                    </div>
                    
                </div>
                    <hr style="margin-bottom: 40px">
            </div>
            <div class="col-lg-4 pad20">
                <div class="row">
                    <div class="section-header">
                        @if(!empty($pengaturantitle['how_homecare_works']))
                        {!!$pengaturantitle['how_homecare_works']!!}
                        @endif
                    </div>
                    <div class="isi-title">
                        @if(!empty($pengaturanisi['how_homecare_works']))
                        {!!$pengaturanisi['how_homecare_works']!!}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="section-header">
                        @if(!empty($pengaturantitle['service_area']))
                        <h2>{!!$pengaturantitle['service_area']!!}</h2>
                        @endif
                    </div>
                    <div class="isi-title">
                        @if(!empty($pengaturanisi['service_area']))
                        {!!$pengaturanisi['service_area']!!}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pad20">
                <div class="row">
                    <div class="section-header">
                        @if (!empty($pengaturantitle['pelayanan_yang_tersedia']))
                        <h2>{!!$pengaturantitle['pelayanan_yang_tersedia']!!}</h2>
                        @endif
                    </div>
                    <div class="isi-title">
                        @if (!empty($pengaturanisi['pelayanan_yang_tersedia']))
                        {!!$pengaturanisi['pelayanan_yang_tersedia']!!}
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="section-header">
                        @if (!empty($pengaturantitle['our_staff']))
                        <h2>{!!$pengaturantitle['our_staff']!!}</h2>
                        @endif
                    </div>
                    <div class="isi-title">
                        @if (!empty($pengaturanisi['our_staff']))
                        {!!$pengaturanisi['our_staff']!!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>