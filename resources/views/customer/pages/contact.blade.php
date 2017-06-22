<!DOCTYPE html>
<html>
@include('customer/master/head')
<body>

    @include('customer/master/nav')

    <!-- content -->

    <div class="div2" >
        <div class="col-md-12 center" style="margin:100px 0px 50px 0px;padding:0px;" >
          <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ4XVccwUCai4RWSibboAdQMY&key=AIzaSyCNQYrYWwNM3oj8gZjzWcmeZR66ruP-7Qk" allowfullscreen></iframe>
        </div>
    </div>
    <div class="col-md-12" style="margin-bottom:40px;">
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
                <div class="col-md-6" style="padding-left: 30px;">
                    <p class="judul-berita">Contact Details</p>
                    <div class="tes">
                        <p><i class="glyphicon glyphicon-home"></i><span style="margin-left: 10px;"><?php print $footer->fc_address; ?></span></p>
                        <p class="tes2"><i class="glyphicon glyphicon-earphone"></i><span style="margin-left: 10px"><p>{{$footer->fc_telp1}}</span></p></p>
                        <p><span class="">{{$footer->fc_telp2}}</span></p>
                        <p class="tes2"><i class="glyphicon glyphicon-envelope"></i><span style="margin-left: 10px;"><p>{{$footer->fc_email}}</p></span></p>
                        <p><span class="">{{$footer->fc_email2}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('customer/master/footer')
</body>
</html>
