<!DOCTYPE html>
<html>
<head>
    <title>Gass GMF</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{url('')}}/plugin/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('')}}/plugin/aos-master/dist/aos.css" />

    <script src="{{url('')}}/plugin/aos-master/dist/aos.js"></script>

    <script src="{{url('')}}/plugin/jQuery/jQuery-2.1.4.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{url('')}}/plugin/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{url('')}}/css/style.css">
</head>
<body>

    <!-- nav -->

    <div class="nav">
        <div class="contact">
            <i class="glyphicon glyphicon-earphone icon-atas"></i><span class="icon-font">+62 89 666 09 444 8</span>
            <i class="glyphicon glyphicon-envelope icon-atas" style="margin-left: 20px"></i><span class="icon-font">gse@aero-asia.co.id</span>
        </div>
        <div class="logo">
            <strong style="font-family:extrabold">GMF </strong>Aircraft Support Services
            <div class="topnav" id="myTopnav">
                <a href="#home">Home</a>
                <a href="#news">About</a>
                <a href="#contact">After Sales & Parts Service</a>
                <a href="#about">Products</a>
                <a href="#about">News</a>
                <a href="#about">Contact</a>
            </div>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>
    </div>

    <!-- background -->

    <div class="foto"><img class="background" src="{{url('')}}/images/homepage/{{$homepage[0]->homepage_gambar}}"></div>

    <!-- div selanjutnya -->

    <div class="div1">
        <div class="col-md-4"></div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100" style="text-align:center">
            <p class="slogan">{{$homepage[0]->homepage_slogan}}</p>
            <p class="slogan-text">{{$homepage[0]->homepage_slogan_subtext}}</p>
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
                    <button><strong>Services</strong></button>
                </div>
                <div class="col-md-3 kotak">
                    <button><strong>Maintenance</strong></button>
                </div>
                <div class="col-md-3 kotak">
                    <button><strong>Assembly and Fabrication</strong></button>
                </div>
                <div class="col-md-3 kotak">
                    <button><strong>Rental</strong></button>
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
                    <img src="http://placehold.it/400x250" width="100%">
                    <div class="caption">
                        <p class="judul-berita">Judul</p>
                        <p class="tanggal">12 Agustus 2017</p>
                        <p class="paragraf">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
                <div class="col-md-6 berita-besar">
                    <img src="http://placehold.it/400x250" width="100%">
                    <div class="caption">
                        <p class="judul-berita">Judul</p>
                        <p class="tanggal">12 Agustus 2017</p>
                        <p class="paragraf">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
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
                <div class="customer">
                    <div id="myCarousel" class="carousel slide">

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                    <div class="col-xs-3"><a href="#x"><img src="http://placehold.it/350x250" alt="Image" class="img-responsive"></a>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                        </div>
                        <!--/carousel-inner-->
                    </div>
                    <!--/myCarousel-->
                </div>
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
                    <p class="about-footer">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="col-md-4">
                    <p class="judul-footer">Contact Us</p>
                    <p><i class="glyphicon glyphicon-home"></i><span style="margin-left: 5px;">GSE Office</span></p>
                    <p style="margin-top: -16px;"><span class="" style="margin-left: 20px">Soekarno Hatta International Airport</span></p>
                    <p style="margin-top: -16px;"><span class="" style="margin-left: 20px">Indonesi 19130</span></p>
                    <p><i class="glyphicon glyphicon-earphone"></i><span style="margin-left: 5px;">+62 89 666 09 444 8</span></p>
                    <p style="margin-top: -16px;"><span class="" style="margin-left: 20px">+62 89 666 09 444 8</span></p>
                    <p><i class="glyphicon glyphicon-envelope"></i><span style="margin-left: 5px;">gse@aero-asia.co.id</span></p>
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