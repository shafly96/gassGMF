<!DOCTYPE html>
<html>
@include('customer/master/head')
<body>

    <!-- nav -->

    @include('customer/master/nav')

    <!-- background -->
    @isset($homepage[0])
    <div class="foto"><img class="background" src="{{url('')}}/images/homepage/{{$homepage[0]->homepage_gambar}}"></div>
    @endisset
    <!-- div selanjutnya -->

    <div class="div1 batas-bawah">
        <div class="col-md-3"></div>
        <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100" style="text-align:center">
            <p class="slogan">@isset($homepage[0]) {{$homepage[0]->homepage_slogan}} @endisset</p>
            <p class="slogan-text">@isset($homepage[0]) {{$homepage[0]->homepage_slogan_subtext}} @endisset</p>
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
            @isset($customer)
            <div class="customer">
                <div id="myCarousel" class="carousel slide">

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <?php 

                        $i=0;
                        $j=0;
                        $k=intdiv(count($customer),4);
                        $l=count($customer)-$k*4;
                        $m=0;
                        while($i<$k){
                            $j++;
                            ?>
                            <div class="item <?php if($j==1) echo 'active'; ?>">
                                <div class="row">
                                    <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m+3]->customer_filename}}" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m+2]->customer_filename}}" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m+1]->customer_filename}}" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m]->customer_filename}}" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <?php 
                            $m+=4;
                            $i++;
                        } 
                        ?>
                        
                        <div class="item <?php if($k==0) echo 'active'; ?>">
                            <div class="row">
                                <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m+3]->customer_filename) ? $customer[$m+3]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{ isset($customer[$m+2]->customer_filename) ? $customer[$m+2]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m+1]->customer_filename) ? $customer[$m+1]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
                                </div>
                                <div class="col-xs-3 jarak"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m]->customer_filename) ? $customer[$m]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
                                </div>
                            </div>
                            <!--/row-->
                        </div>

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

</script>
</html>