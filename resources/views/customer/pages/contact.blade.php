<!DOCTYPE html>
<html>
@include('customer/master/head')
<body>

    @include('customer/master/nav')

<!-- content -->

    <div class="div2">
        <div class="col-md-2"></div>
        <div class="col-md-8center" data-aos="zoom-in" data-aos-delay="100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.967708706664!2d106.63715608074149!3d-6.135041123113239!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMDgnMDYuMiJTIDEwNsKwMzgnMTkuNSJF!5e0!3m2!1sid!2sbr!4v1497859879952" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
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