<!DOCTYPE html>
<html>
@include('customer/master/head')
<body>

    @include('customer/master/nav')

    <!-- content -->

    <div class="div2">
        <div class="col-md-2"></div>
        <div class="col-md-8 center" data-aos="zoom-in" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.967708706664!2d106.63715608074149!3d-6.135041123113239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMDgnMDYuMiJTIDEwNsKwMzgnMTkuNSJF!5e0!3m2!1sid!2sbr!4v1497859879952" width="100%" height="400" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-2"></div>
        <div class="col-md-8 center">
            <div class="col-md-12 rata">
                <div class="col-md-6" style="padding-right: 30px">
                    <p class="judul-berita">Leave a Message</p>
                    <form method="post" action="{{url('')}}/contact">
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" name="email" type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" name="telp" type="text" placeholder="Telp">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                            <textarea class="form-control" name="message" placeholder="Review" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6" style="padding-left: 30px">
                    <p class="judul-berita">Contact Details</p>
                    <p><i class="glyphicon glyphicon-home"></i><span style="margin-left: 5px;">GSE Office</span></p>
                    <p style="margin-top: -10px;"><span class="" style="margin-left: 20px">Soekarno Hatta International Airport</span></p>
                    <p style="margin-top: -10px;"><span class="" style="margin-left: 20px">Indonesia 19130</span></p>
                    <p style="margin-top: 25px"><i class="glyphicon glyphicon-earphone"></i><span style="margin-left: 5px;">+62 89 666 09 444 8</span></p>
                    <p style="margin-top: -10px;"><span class="" style="margin-left: 20px">+62 89 666 09 444 8</span></p>
                    <p style="margin-top: 25px"><i class="glyphicon glyphicon-envelope"></i><span style="margin-left: 5px;">gse@aero-asia.co.id</span></p>
                </div>
            </div>
        </div>
    </div>

    @include('customer/master/footer')
</body>
</html>