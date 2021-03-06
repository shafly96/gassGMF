<!DOCTYPE html>
<html>
@include('customer/master/head')
<body>

    @include('customer/master/nav')

<!-- content -->
    @yield('modal')

    <div class="div2">
        <div class="col-md-1"></div>
        <div class="col-md-10 batas-atas batas-bawah center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12">
                <p class="judul-div a"><strong>@yield('judul1')</strong> @yield('judul2')</p>
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

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

</script>
</html>