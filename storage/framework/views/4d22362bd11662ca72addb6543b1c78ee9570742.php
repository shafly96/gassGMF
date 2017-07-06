<!DOCTYPE html>
<html>
<?php echo $__env->make('customer/master/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

    <?php echo $__env->make('customer/master/nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- content -->
    <?php echo $__env->yieldContent('modal'); ?>

    <div class="div2">
        <div class="col-md-1"></div>
        <div class="col-md-10 batas-atas batas-bawah center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-12">
                <p class="judul-div a"><strong><?php echo $__env->yieldContent('judul1'); ?></strong> <?php echo $__env->yieldContent('judul2'); ?></p>
                <div class="col-md-12">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>

<?php echo $__env->make('customer/master/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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