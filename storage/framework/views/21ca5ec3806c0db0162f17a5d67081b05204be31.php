<!DOCTYPE html>
<html>
<?php echo $__env->make('customer/master/head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>

    <!-- nav -->

    <?php echo $__env->make('customer/master/nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div >

      <!-- background -->
      <?php if(isset($homepage[0])): ?>
      <div class="foto">
        <?php $__currentLoopData = $homepage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img class="background" src="<?php echo e(url('')); ?>/images/homepage/<?php echo e($data->homepage_gambar); ?>" style="max-width:100%;">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>
    <!-- div selanjutnya -->

    <div class="div1">
        <div class="col-md-1"></div>
        <div class="col-md-10" data-aos="zoom-in" data-aos-delay="100" style="text-align:center;">


          <?php if(isset($homepage[0])): ?>
          <?php $__currentLoopData = $homepage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div style="">
            <p class="slogan" style="text-shadow: 1px 1px 10px #000000"><?php echo e($data->homepage_slogan); ?></p>
        </div>
        <div style="">
            <p class="slogan-text" style="text-shadow: 1px 1px 5px #000000"><?php echo e($data->homepage_slogan_subtext); ?></p>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>

<div class="chevron">
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
        <div class="col-md-12 center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-md-1"></div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="<?php echo e(url('')); ?>/image/icon/reliability.png" width="65%">
                <p class="font-welcome">Reliable and Satisfying Results</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="<?php echo e(url('')); ?>/image/icon/competitive.png" width="65%">
                <p class="font-welcome">Competitive Pricing</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="<?php echo e(url('')); ?>/image/icon/safe.png" width="65%">
                <p class="font-welcome">Safe</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="<?php echo e(url('')); ?>/image/icon/experienced.png" width="65%">
                <p class="font-welcome">Experienced</p>
            </div>
            <div class="col-md-2 icon-welcome text-center">
                <img src="<?php echo e(url('')); ?>/image/icon/quality2.png" width="65%">
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
                <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                 <img src="<?php echo e(url('')); ?>/images/product/<?php echo e($data->filename); ?>" style="width: 90%; height:auto; max-height: 100%">
             </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>
     </div>
     <div class="col-md-6">
        <p class="judul-div"><strong>Our</strong> Products</p>
        <div class="slide-product-2" style="margin-left:70px">
            <?php
            if (strlen($berita->about_gass_text) > 293) {
                $trimstring = substr($berita->about_gass_text, 0, 293);
            } else {
                $trimstring = $berita->about_gass_text;
            }
            echo $trimstring."...";
            ?>
            <p><a href="<?php echo e(url('')); ?>/about">Read more</a></p>
        </div>
    </div>
    <div class="col-md-12">
        <div class="col-md-3 kotak">
            <button onclick="window.location.href='<?php echo e(url('')); ?>/products/ajax/2'"><strong>Services</strong></button>
        </div>
        <div class="col-md-3 kotak">
            <button onclick="window.location.href='<?php echo e(url('')); ?>/products/ajax/3'"><strong>Maintenance</strong></button>
        </div>
        <div class="col-md-3 kotak">
            <button onclick="window.location.href='<?php echo e(url('')); ?>/products/ajax/1'"><strong>Assembly and Fabrication</strong></button>
        </div>
        <div class="col-md-3 kotak">
            <button onclick="window.location.href='<?php echo e(url('')); ?>/products/ajax/4'"><strong>Rental</strong></button>
        </div>
    </div>
</div>
</div>

<!-- div selanjutnya (berita) -->

<div class="div2">
    <div class="col-md-1"></div>
    <div class="col-md-10 center" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-md-12">
            <p class="judul-div"><strong>Latest</strong> News</p>
            <div class="col-md-6 berita-besar">
                <?php if(isset($latest_news[0])): ?>
                <div style="height: 250px">
                    <img src="<?php echo e(url('')); ?>/images/news/<?php echo e($latest_news[0]->berita_filename); ?>" width="80%" style="height: auto; max-height: 100%">
                </div>
                <div class="caption"><a href="<?php echo e(url('')); ?>/news/detail/<?php echo e($latest_news[0]->berita_id); ?>" style="text-decoration:none">
                    <p class="judul-berita"><?php echo e($latest_news[0]->berita_title); ?></p></a>
                    <p class="tanggal"><?php echo e($latest_news[0]->berita_date); ?></p>
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
                    <p class="paragraf"><a href="<?php echo e(url('')); ?>/news/detail/<?php echo e($latest_news[0]->berita_id); ?>">Read more ..</a></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6 berita-besar">
                <?php if(isset($latest_news[1])): ?>
                <div style="height: 250px">
                    <img src="<?php echo e(url('')); ?>/images/news/<?php echo e($latest_news[1]->berita_filename); ?>" width="80%" style="height: auto; max-height: 100%">
                </div>
                <div class="caption">
                  <a href="<?php echo e(url('')); ?>/news/detail/<?php echo e($latest_news[1]->berita_id); ?>" style="text-decoration:none">
                    <p class="judul-berita"><?php echo e($latest_news[1]->berita_title); ?></p></a>
                    <p class="tanggal"><?php echo e($latest_news[1]->berita_date); ?></p>
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
                    <p class="paragraf"><a href="<?php echo e(url('')); ?>/news/detail/<?php echo e($latest_news[1]->berita_id); ?>">Read more ..</a></p>
                </div>
                <?php endif; ?>
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
            <?php if(isset($customer)): ?>
            <div class="customer center">
                <div class="col-md-12 col-md-offset-1">
                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2000" id="myCarousel">
                      <div class="carousel-inner">
                        <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item <?php if($key==0): ?> active <?php endif; ?>">
                          <div class="col-md-2 col-sm-6 col-xs-12"><a href="#"><img src="<?php echo e(url('')); ?>/images/logo-cust/<?php echo e($value->customer_filename); ?>" class="img-responsive" style="margin: 0 auto;"></a></div>
                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
          </div>
          <!--/myCarousel-->
      </div>
      <?php endif; ?>
  </div>
</div>
</div>

<!-- div footer -->

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

$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
}
});

</script>
</html>
