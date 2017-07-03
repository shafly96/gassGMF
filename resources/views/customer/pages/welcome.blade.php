<!DOCTYPE html>
<html>
@include('customer/master/head')
<body>

    <!-- nav -->

    @include('customer/master/nav')
    <div >

      <!-- background -->
      @isset($homepage[0])
      <div class="foto">
        @foreach($homepage as $data)
        <img class="background" src="{{url('')}}/images/homepage/{{$data->homepage_gambar}}" style="max-width:100%;">
        @endforeach
    </div>
    @endisset
    <!-- div selanjutnya -->

    <div class="div1 batas-bawah" style="height:15em">
        <div class="col-md-1"></div>
        <div class="col-md-10" data-aos="zoom-in" data-aos-delay="100" style="text-align:center;">


          @isset($homepage[0])
          @foreach($homepage as $data)
          <div style="">
            <p class="slogan" style="text-shadow: 1px 1px 10px #000000">{{$data->homepage_slogan}}</p>
        </div>
        <div style="">
            <p class="slogan-text" style="text-shadow: 1px 1px 5px #000000">{{$data->homepage_slogan_subtext}}</p>
        </div>
        @endforeach
        @endisset
    </div>
</div>

<div>
    <button class="w3-display-left" style="margin-left: 20px; background:rgba(0,0,0,0.6); border-style: none; padding: 10px" onclick="plusDivs(-1)"><i class="fa fa-chevron-left" aria-hidden="true" style="color:white; font-size: 30px"></i></button>
    <button class="w3-display-right" style="margin-right: 20px; background:rgba(0,0,0,0.6); border-style: none; padding: 10px" onclick="plusDivs(1)"><i class="fa fa-chevron-right" aria-hidden="true" style="color:white; font-size: 30px"></i></button>

</div>
<!-- div selanjutnya (welcome) -->
</div>

<div class="div2">
    <div class="col-md-1"></div>
    <div class="col-md-10 batas-bawah" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-md-12 center">
            <p class="judul-div a" style="margin-top: 50px"><strong>Welcome to</strong></p>
            <p class="judul-div b">GMF Aircraft Support Services</p>
        </div>
        <div class="col-md-12 center">
            <div class="col-md-1"></div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="{{url('')}}/image/icon/quality.png" width="65%">
                <p class="font-welcome">Reliable and Satisfying Results</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="{{url('')}}/image/icon/quality.png" width="65%">
                <p class="font-welcome">Competitive Pricing</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="{{url('')}}/image/icon/quality.png" width="65%">
                <p class="font-welcome">Safe</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="{{url('')}}/image/icon/quality.png" width="65%">
                <p class="font-welcome">Experienced</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="{{url('')}}/image/icon/quality.png" width="65%">
                <p class="font-welcome text-center">Quality</p>
            </div>
        </div>
    </div>
</div>

<!-- div selanjutnya (produk) -->

<div class="div2">
    <div class="col-md-1"></div>
    <div class="col-md-10 batas-bawah center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-md-6">
            <div id="slideshow">
             <div>
               <img src="{{url('')}}/image/truck.png" style="width: 100%; height:auto; max-height: 100%">
           </div>
           <div>
               <img src="{{url('')}}/image/gass.jpg" style="width: 100%; height:auto; max-height: 100%">
           </div>
       </div>
   </div>
   <div class="col-md-6">
    <p class="judul-div"><strong>Our</strong> Products</p>
    <div class="slide-product-2">
        <p class="slogan-text product">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. .</p>
    </div>
</div>
<div class="col-md-12 produk">
    <div class="col-md-3 kotak">
        <button onclick="window.location.href='{{url('')}}/products/ajax/2'"><strong>Services</strong></button>
    </div>
    <div class="col-md-3 kotak">
        <button onclick="window.location.href='{{url('')}}/products/ajax/3'"><strong>Maintenance</strong></button>
    </div>
    <div class="col-md-3 kotak">
        <button onclick="window.location.href='{{url('')}}/products/ajax/1'"><strong>Assembly and Fabrication</strong></button>
    </div>
    <div class="col-md-3 kotak">
        <button onclick="window.location.href='{{url('')}}/products/ajax/4'"><strong>Rental</strong></button>
    </div>
</div>
</div>
</div>

<!-- div selanjutnya (berita) -->

<div class="div2">
    <div class="col-md-1"></div>
    <div class="col-md-10 batas-bawah center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-md-12">
            <p class="judul-div"><strong>Latest</strong> News</p>
            <div class="col-md-6 berita-besar">
                @isset($latest_news[0])
                <div style="height: 250px">
                    <img src="{{url('')}}/images/news/{{$latest_news[0]->berita_filename}}" width="80%" style="height: auto; max-height: 100%">
                </div>
                <div class="caption"><a href="{{url('')}}/news/detail/{{$latest_news[0]->berita_id}}" style="text-decoration:none">
                    <p class="judul-berita">{{$latest_news[0]->berita_title}}</p></a>
                    <p class="tanggal">{{$latest_news[0]->berita_date}}</p>
                    <p class="paragraf">
                        <?php
                        if (strlen($latest_news[0]->berita_text) > 170) {
                            $trimstring = substr($latest_news[0]->berita_text, 0, 270);
                        } else {
                            $trimstring = $latest_news[0]->berita_text;
                        }
                        echo $trimstring;
                        ?>
                    </p>
                    <p class="paragraf"><a href="{{url('')}}/news/detail/{{$latest_news[0]->berita_id}}">Read more ..</a></p>
                </div>
                @endisset
            </div>
            <div class="col-md-6 berita-besar">
                @isset($latest_news[1])
                <div style="height: 250px">
                    <img src="{{url('')}}/images/news/{{$latest_news[1]->berita_filename}}" width="80%" style="height: auto; max-height: 100%">
                </div>
                <div class="caption">
                  <a href="{{url('')}}/news/detail/{{$latest_news[1]->berita_id}}" style="text-decoration:none">
                    <p class="judul-berita">{{$latest_news[1]->berita_title}}</p></a>
                    <p class="tanggal">{{$latest_news[1]->berita_date}}</p>
                    <p class="paragraf">
                        <?php
                        if (strlen($latest_news[1]->berita_text) > 170) {
                            $trimstring = substr($latest_news[1]->berita_text, 0, 270);
                        } else {
                            $trimstring = $latest_news[1]->berita_text;
                        }
                        echo $trimstring;
                        ?>
                    </p>
                    <p class="paragraf"><a href="{{url('')}}/news/detail/{{$latest_news[1]->berita_id}}">Read more ..</a></p>
                </div>
                @endisset
            </div>
        </div>
    </div>
</div>

<!-- div selanjutnya (customer) -->

<div class="div2">
    <div class="col-md-1"></div>
    <div class="col-md-10 batas-bawah" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-md-12">
            <p class="judul-div kanan center"><strong>Our</strong> Customers</p>
            @isset($customer)
            <div class="customer">
                <div id="myCarousel" class="carousel slide">

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <?php

                        $i=0;
                        $k=intdiv(count($customer),4);
                        $l=count($customer)-$k*4;
                        $m=0;
                        while($i<$k){
                            ?>
                            <div class="item <?php if($i==0) echo 'active'; ?>">
                                <div class="row">
                                    <div class="col-xs-3 jarak"><a href="#x"><?php if(isset($customer[$m+3])) {?><img src="{{url('')}}/images/logo-cust/{{$customer[$m+3]->customer_filename}}" alt="Image" class="img-responsive"><?php } ?></a>
                                    </div>
                                    <div class="col-xs-3 jarak"><a href="#x"><?php if(isset($customer[$m+2])) {?><img src="{{url('')}}/images/logo-cust/{{$customer[$m+2]->customer_filename}}" alt="Image" class="img-responsive"><?php } ?></a>
                                    </div>
                                    <div class="col-xs-3 jarak"><a href="#x"><?php if(isset($customer[$m+1])) {?><img src="{{url('')}}/images/logo-cust/{{$customer[$m+1]->customer_filename}}" alt="Image" class="img-responsive"><?php } ?></a>
                                    </div>
                                    <div class="col-xs-3 jarak"><a href="#x"><?php if(isset($customer[$m])) {?><img src="{{url('')}}/images/logo-cust/{{$customer[$m]->customer_filename}}" alt="Image" class="img-responsive"><?php } ?></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <?php
                            $m+=4;
                            $i++;
                        }
                        ?>

                        <?php if(count($customer)%4!=0){ ?>
                        <div class="item <?php if($k==0) echo 'active'; ?>">
                            <div class="row">
                                <div class="col-xs-3 jarak"><a href="#x"><?php  if(isset($customer[$m+3])){?><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m+3]->customer_filename) ? $customer[$m+3]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"><?php } ?></a>
                                </div>
                                <div class="col-xs-3 jarak"><a href="#x"><?php  if(isset($customer[$m+2])) {?><img src="{{url('')}}/images/logo-cust/{{ isset($customer[$m+2]->customer_filename) ? $customer[$m+2]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"><?php } ?></a>
                                </div>
                                <div class="col-xs-3 jarak"><a href="#x"><?php  if(isset($customer[$m+1])) {?><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m+1]->customer_filename) ? $customer[$m+1]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"><?php } ?></a>
                                </div>
                                <div class="col-xs-3 jarak"><a href="#x"><?php  if(isset($customer[$m])) {?><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m]->customer_filename) ? $customer[$m]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"><?php } ?></a>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <?php } ?>

                    </div>
                    <!--/carousel-inner-->
                </div>
                <!--/myCarousel-->
            </div>
            @endisset
        </div>
    </div>
</div>

<!-- div footer -->

@include('customer/master/footer')

</body>
<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    AOS.init();

    $(document).ready(function() {
        $('#myCarousel').carousel({
            interval: 3000
        });

        $('#carousel-example-generic').carousel({
            interval: 500
        });
    });

    $("#slideshow > div:gt(0)").hide();

    setInterval(function() {
      $('#slideshow > div:first')
      .fadeOut(1000)
      .next()
      .fadeIn(1000)
      .end()
      .appendTo('#slideshow');
  }, 3000);

    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("background");
        var y = document.getElementsByClassName("slogan");
        var z = document.getElementsByClassName("slogan-text");
        if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length} ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            y[i].style.display = "none";
            z[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
        y[slideIndex-1].style.display = "block";
        z[slideIndex-1].style.display = "block";
    }

    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("background");
        var y = document.getElementsByClassName("slogan");
        var z = document.getElementsByClassName("slogan-text");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
          y[i].style.display = "none";
          z[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
    y[slideIndex-1].style.display = "block";
    z[slideIndex-1].style.display = "block";
    setTimeout(carousel, 4000);
}

</script>
</html>
