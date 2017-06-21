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

    <div class="div1">
        <div class="col-md-4"></div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100" style="text-align:center">
            <p class="slogan">@isset($homepage[0]) {{$homepage[0]->homepage_slogan}} @endisset</p>
            <p class="slogan-text">@isset($homepage[0]) {{$homepage[0]->homepage_slogan_subtext}} @endisset</p>
        </div>
    </div>

    <!-- div selanjutnya (welcome) -->

    <div class="div2">
        <div class="col-md-2"></div>
        <div class="col-md-8 batas-bawah" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12 center">
                <p class="judul-div a"><strong>Welcome to</strong></p>
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
        <div class="col-md-2"></div>
        <div class="col-md-8 batas-bawah center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-6">
                <img src="{{url('')}}/image/truck.png" width="100%">
            </div>
            <div class="col-md-6">
                <p class="judul-div"><strong>OUR</strong> PRODUCTS</p>
                <p class="slogan-text product">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. .</p>
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
        <div class="col-md-2"></div>
        <div class="col-md-8 batas-bawah center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12">
                <p class="judul-div a"><strong>LATEST</strong> NEWS</p>
                <div class="col-md-6 berita-besar">
                    @isset($latest_news[0])
                    <img src="{{url('')}}/images/news/{{$latest_news[0]->berita_filename}}" width="400px" height="250px">
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
                    <img src="{{url('')}}/images/news/{{$latest_news[1]->berita_filename}}" width="400px" height="250px">
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
        <div class="col-md-2"></div>
        <div class="col-md-8 batas-bawah" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12">
                <p class="judul-div kanan center"><strong>OUR</strong> CUSTOMERS</p>
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
                                        <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m+3]->customer_filename}}" alt="Image" class="img-responsive"></a>
                                        </div>
                                        <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m+2]->customer_filename}}" alt="Image" class="img-responsive"></a>
                                        </div>
                                        <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m+1]->customer_filename}}" alt="Image" class="img-responsive"></a>
                                        </div>
                                        <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{$customer[$m]->customer_filename}}" alt="Image" class="img-responsive"></a>
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
                                    <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m+3]->customer_filename) ? $customer[$m+3]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{ isset($customer[$m+2]->customer_filename) ? $customer[$m+2]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m+1]->customer_filename) ? $customer[$m+1]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="{{url('')}}/images/logo-cust/{{isset($customer[$m]->customer_filename) ? $customer[$m]->customer_filename : 'kosong.jpg'}}" alt="Image" class="img-responsive"></a>
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

    <div style="width: 100%; float:left; background-color:#005F6B">
        <div class="col-md-12 footer">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="col-md-4">
                    <p class="judul-footer">About</p>
                    <p class="about-footer">
                        <?php 
                        if (strlen($berita->about_gass_text) > 170) {
                            $trimstring = substr($berita->about_gass_text, 0, 270);
                        } else {
                            $trimstring = $berita->about_gass_text;
                        }
                        echo $trimstring;
                        ?>
                    </p>
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

</script>
</html>