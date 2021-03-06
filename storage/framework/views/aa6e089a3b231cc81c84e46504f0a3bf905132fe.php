<!DOCTYPE html>
<html>
<?php echo $__env->make('customer/master/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

    <?php echo $__env->make('customer/master/nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                    <form method="post" action="<?php echo e(url('')); ?>/contact">
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" name="email" type="text" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" name="telp" type="text" placeholder="Telp" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <textarea class="form-control" name="message" placeholder="message" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-12">
                                <?php echo e(csrf_field()); ?>

                                <input type="submit" class="btn btn-primary" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6" style="padding-left: 30px;">
                    <p class="judul-berita">Contact Details</p>
                    <div class="tes" style="padding-top: 10px">
                        <div class="row">
                            <div class="col-md-1"><i class="glyphicon glyphicon-home"></i></div>
                            <div class="col-md-10" style="margin-top: 10px"><?php print $footer->fc_address; ?></div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-1"><i class="glyphicon glyphicon-earphone"></i></div>
                            <div class="col-md-10"><?php echo e($footer->fc_telp1); ?></div>

                            <div class="col-md-1"></div>
                            <div class="col-md-10"><?php echo e($footer->fc_telp2); ?></div>
                        </div>

                        <div class="row" style="margin-top: 20px">
                            <div class="col-md-1"><i class="glyphicon glyphicon-envelope"></i></div>
                            <div class="col-md-10"><?php echo e($footer->fc_email); ?></div>

                            <div class="col-md-1"></div>
                            <div class="col-md-10"><?php echo e($footer->fc_email2); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('customer/master/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</html>
