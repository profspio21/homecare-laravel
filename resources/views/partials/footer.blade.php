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
                    <h3>Call</h3>
                </div>
                <div class="row">
                    @if (!empty($pengaturanisi['telfon']))
                        <a href="tel:{{ str_replace(['<p>','</p>', ' '],'', $pengaturanisi['telfon'] ?? '')}}">{!!$pengaturanisi['telfon']!!}</a> 
                    @endif
                </div>
            </div>
            <div class="col-lg-4x">
                <div class="row">
                    <h3>Address</h3>
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
            <p>@2018 RUKUN Senior Living</p>
        </div>
        <br>
        <div class="social">
            <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="" target="_blank"><i class="fa fa-youtube"></i></a>
            <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</footer>