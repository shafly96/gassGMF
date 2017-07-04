<!-- div footer -->

<div style="width: 100%; float:left; background-color:#3B5A9A">
    <div class="col-md-12 footer">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="col-md-4 about-footer">
                <p class="judul-footer">About</p>
                <p class="paragraf">
                    <?php
                    if (strlen($berita->about_gass_text) > 170) {
                        $trimstring = substr($berita->about_gass_text, 0, 170);
                    } else {
                        $trimstring = $berita->about_gass_text;
                    }
                    echo $trimstring;
                    ?>
                </p>
                <p class="paragraf"><a href="{{url('')}}/about">Read more ..</a></p>
            </div>
            <div class="col-md-4 about-footer">
                <p class="judul-footer">Contact Us</p>
                <div class="tes" style="padding-top: 10px">
                    <div class="row">
                        <div class="col-md-1"><i class="glyphicon glyphicon-home"></i></div>
                        <div class="col-md-10" style="margin-top: 10px"><?php print $footer->fc_address; ?></div>
                    </div>

                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-1"><i class="glyphicon glyphicon-earphone"></i></div>
                        <div class="col-md-10">{{$footer->fc_telp1}}</div>

                        <div class="col-md-1"></div>
                        <div class="col-md-10">{{$footer->fc_telp2}}</div>
                    </div>

                    <div class="row" style="margin-top: 20px">
                        <div class="col-md-1"><i class="glyphicon glyphicon-envelope"></i></div>
                        <div class="col-md-10">{{$footer->fc_email}}</div>

                        <div class="col-md-1"></div>
                        <div class="col-md-10">{{$footer->fc_email2}}</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 about-footer">
                <img src="{{url('')}}/image/logo.png" width="100%" style="margin-top: 70px;">
                <div class="pull-right col-xs-12" style="margin-top:20px;">
                        <a target="_blank" style="text-decoration:none;color: white;" href="https://www.facebook.com/GMF-AeroAsia-1509901779321421/info?tab=overview"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
                        <a target="_blank" style="text-decoration:none;color: white;" href="https://www.youtube.com/channel/UC5mNZ5CmUyYsfKZocJv5xag"><i class="fa fa-youtube-square fa-3x" aria-hidden="true"></i></a>
                        <a target="_blank" style="text-decoration:none;color: white;" href="https://www.linkedin.com/company/gmf-aeroasia"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a>
                        <a target="_blank" style="text-decoration:none;color: white;" href="https://instagram.com/gmfaeroasia/"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>
<div style="width: 100%; float:left; background-color:#EAEAEA">
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-8 copyright">Copyright © 2017 - Shafly Naufal A & Hariyoso Ario B</div>
    </div>
</div>
