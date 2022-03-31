<section id="isi1">
    <div class="container isi1">
        <div class="jasa">
            <img src="../img/icon.png" alt="Rukun Home Care">
            <div class="row1">
                <h1>Jasa perawatan dan pendampingan orang tua di rumah</h1>
            </div>
            <img src="../img/line.png" alt="">
            <div class="row2">
                <p>
                    RUKUN Home Care hadir sebagai pilihan terbaik untuk pelayanan perawatan di rumah yang profesional.<br>
                    Sebagai divisi dari RUKUN Senior Living, kami berpengalaman melayani dan memberikan kenyamanan hidup bagi warga senior sejak 2011.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="isi2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-header">
                    <h2>Why choose us</h2>
                </div>
                <p>Dengan pengalaman di bidang Senior Living, tenaga perawat dan caregiver kami sudah terlatih dan trampil dalam melayani warga senior. 
                    Selain itu, staff yang bertugas didukung oleh Care Coordinator dan staff medis lainnya untuk menjaga kwalitas pelayanan yang diberikan.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="section-header">
                    <h2>What we do</h2>
                </div>
                <p>
                    Kami melayani warga senior yang perlu ditemani, memerlukan asistensi dengan kebutuhan hidup sehari-hari, atau memerlukan perawatan di rumah saat tidak lagi di rumah sakit. 
                    Pelayanan kami bertujuan untuk meningkatkan atau mempertahankan kondisi kesehatan, maupun memaksimalkan tingkat kemandirian dan kesejahteraan klien.
                </p>
            </div>
        </div>
        
        
    </div>
</section>

<section id="isi3">
    <div class="container">
        <div class="jasa">
            <h1>Percayakan perawatan senior terkasih Anda pada kami</h1>
            <img src="../img/line.png" alt="">
            <p>
                Segera hubungi kami untuk menanyakan informasinya.
            </p>
        </div>
    </div>
</section>

<section id="isi4">
    <div class="container">
        <div class="about-heading">
            <h2>
                About Rukun Senior Living
            </h2>
        </div>    
        <div class="aboutp col-lg-6">
            <p>
            RUKUN Senior Living adalah penyedia jasa hunian dan pelayanan senior terpadu bagi warga senior yang ingin menikmati kenyamanan hidup yang aktif, mandiri, dan produktif. RUKUN menyajikan serangkaian ragam jasa sesuai kebutuhan warga senior, dari layanan di rumah (Home Care), sentra kegiatan (Senior Club dan Dementia Day Program), Maupun hunian untuk gaya hidup yang mandiri hingga berkebutuhan khusus (Senior Living Resort dan RUKUN Senior Care).
            </p>
        </div> 
    </div>
</section>

<section id="isi5">
    <div class="isi5-container">
        <div class="row mleft">
            <div class="col-lg-3 pad20 rukun-options">
                <div class="row ">
                    <div class="list-options">
                        <h2>Rukun Options</h2>
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
                        <a href="tel:+6285888076790" style="font-weight: 600">Hubungi Kami</a>
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