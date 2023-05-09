<footer id="footer">
    <div class="container">
        <div class="row" style="padding-top:30px;">
            <div class="col-lg-4x">
                <div class="row"><h3>Email</h3></div>
                <div class="row">
                    @if (!empty($pengaturanisi['email']))
                        {!!$pengaturanisi['email']!!}
                    @endif
                </div>
            </div>
            <div class="col-lg-4x">
                <div class="row">
                    <h3>Contact</h3>
                </div>
                <div class="row">
                    @if (!empty($pengaturanisi['telfon']))
                       {!!$pengaturanisi['telfon']!!}
                    @endif
                </div>
                <br>
                <div class="row">
                    @if (!empty($pengaturanisi['wa']))
                    {!!$pengaturanisi['wa']!!}
                    @endif
                </div>
            </div>
            <div class="col-lg-4x">
                <div class="row">
                    <h3>Address</h3>0
                </div>
                <div class="row alamat">
                    @if (!empty($pengaturanisi['alamat']))
                        {!!$pengaturanisi['alamat']!!}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <hr style="margin-top: 30px">
    <div class="container bot-footer">
        <div class="company">
            <p style="vertical-align: center"><i class="fa fa-copyright fa-2" aria-hidden="true" style="font-size: 18px"></i>  2022 RUKUN Home Care</p>
        </div>
        <br>
        <div class="social">
            <a href="https://www.facebook.com/RUKUNHomeCare/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://www.youtube.com/c/OfficialRUKUNSeniorLiving" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="https://www.instagram.com/rukun_homecare/" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</footer>