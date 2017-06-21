<!-- div footer -->

    <div style="width: 100%; float:left; background-color:#005F6B">
        <div class="col-md-12 footer">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="col-md-4">
                    <p class="judul-footer">About</p>
                    <p class="about-footer">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="col-md-4">
                    <p class="judul-footer">Contact Us</p>
                    <div class="tes">
                        <p><i class="glyphicon glyphicon-home"></i><span style="margin-left: 10px;"><?php print $footer->fc_address; ?></span></p>
                        <p class="tes2"><i class="glyphicon glyphicon-earphone"></i><span style="margin-left: 10px"><p>{{$footer->fc_telp1}}</span></p></p>
                        <p><span class="">{{$footer->fc_telp2}}</span></p>
                        <p class="tes2"><i class="glyphicon glyphicon-envelope"></i><span style="margin-left: 10px;"><p>{{$footer->fc_email}}</p></span></p>
                        <p><span class="">{{$footer->fc_email2}}</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{url('')}}/image/logo.png" width="100%" class="judul-footer">
                </div>
            </div>
        </div>
    </div>
    <div style="width: 100%; float:left; background-color:#343838">
        <div class="col-md-12">
            <div class="col-md-2"></div>
            <div class="col-md-8 copyright">Copyright © 2017 - Shafly Naufal A & Hariyoso Ario B</div>
        </div>
    </div>