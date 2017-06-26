<!DOCTYPE html>
<html>
@include('customer/master/head')
<body>

    <!-- nav -->

    @include('customer/master/nav')

    <!-- background -->
    @isset($homepageimg)
    <div class="foto">
        @foreach($homepageimg as $data)
        <img class="background" src="{{url('')}}/images/homepage/{{$data->homepage_gambar}}">
        @endforeach
        <div style="margin-top: 300px">
                <button class="w3-display-left" style="margin-left: 20px" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-display-right" style="margin-right: 20px" onclick="plusDivs(1)">&#10095;</button>
        </div>
    </div>
    @endisset
    <!-- div selanjutnya -->

    <div class="div1 batas-bawah">
        <div class="col-md-3"></div>
        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100" style="text-align:center">
            @isset($homepage)
            <p class="slogan">{{$homepage->homepage_slogan}}</p>
            <p class="slogan-text">{{$homepage->homepage_slogan_subtext}}</p>
            @endisset
        </div>
    </div>

    <!-- div selanjutnya (welcome) -->

    <div class="div2">
        <div class="col-md-1"></div>
        <div class="col-md-10 batas-bawah" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12 center">
                <p class="judul-div a" style="margin-top: 50px"><strong>Welcome to</strong></p>
                <p class="judul-div b">GMF Aircraft Support Services</p>
            </div>
            <div class="col-md-12 center">
                <div class="col-md-1"></div>
                <div class="col-md-2 icon-welcome">
                    <img src="{{url('')}}/image/icon/quality.png" width="65%">
                    <p class="font-welcome">Quality</p>
                </div>
                <div class="col-md-2 icon-welcome">
                    <img src="{{url('')}}/image/icon/quality.png" width="65%">
                    <p class="font-welcome">Quality</p>
                </div>
                <div class="col-md-2 icon-welcome">
                    <img src="{{url('')}}/image/icon/quality.png" width="65%">
                    <p class="font-welcome">Quality</p>
                </div>
                <div class="col-md-2 icon-welcome">
                    <img src="{{url('')}}/image/icon/quality.png" width="65%">
                    <p class="font-welcome">Quality</p>
                </div>
                <div class="col-md-2 icon-welcome">
                    <img src="{{url('')}}/image/icon/quality.png" width="65%">
                    <p class="font-welcome">Quality</p>
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
                <div class="caption">
                    <p class="judul-berita">{{$latest_news[0]->berita_title}}</p>
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
                    <p class="judul-berita">{{$latest_news[1]->berita_title}}</p>
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
