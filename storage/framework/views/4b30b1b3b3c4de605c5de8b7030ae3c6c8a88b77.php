<?php $__env->startSection('judul1'); ?>
Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata" style="margin-top: 50px">
	<div class="col-md-7">
		<div class="col-md-12" style="padding-bottom: 30px">
			<div class="w3-content w3-section" style="width:100%; max-height:440px; text-align:center; margin-left:0 !important;">
				<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<img class="mySlides" src="<?php echo e(url('')); ?>/images/product/<?php echo e($product[$key]->filename); ?>" style="max-height: 440px; max-width:100%; margin: 0 auto">
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				<button class="w3-display-left" style="margin-left: 20px; background:rgba(0,0,0,0.6); border-style: none; padding: 10px" onclick="plusDivs(-1)"><i class="fa fa-chevron-left" aria-hidden="true" style="color:white; font-size: 15px"></i></button>
    			<button class="w3-display-right" style="margin-right: 20px; background:rgba(0,0,0,0.6); border-style: none; padding: 10px" onclick="plusDivs(1)"><i class="fa fa-chevron-right" aria-hidden="true" style="color:white; font-size: 15px"></i></button>
			</div>
		</div>
		<div class="col-md-12">
			<p class="judul-berita" style="font-size: 20px">Description</p>
			<p class="paragraf"><?php echo e($product[0]->product_description); ?></p>

			<p class="judul-berita" style="margin-top: 50px; font-size: 20px">Review</p>
			<?php if(isset($review[0])): ?>
			<div class="isiReview">
				<?php $__currentLoopData = $review; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div style="width: 100%; border-bottom: solid 2px; border-bottom-color: #EAEAEA" class="paragraf">
					<p class="paragraf" style="font-size: 15px"><?php echo e($data->reviews_title); ?> (<strong style="font-size: 12px"><?php echo e($data->reviews_name); ?></strong>)</p>
					<p class="paragraf"  style="font-size: 15px"><?php echo e($data->reviews_description); ?></p>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<?php endif; ?>
			<div class="kirimReview">
				<form method="post" action="<?php echo e(url('')); ?>/products/send">
					<div class="form-group row">
						<div class="col-xs-6">
							<input class="form-control" name="nickname" type="text" placeholder="Nick Name">
						</div>
						<div class="col-xs-6">
							<input class="form-control" name="title" type="text" placeholder="Title Review">
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-12">
							<textarea class="form-control" name="review" placeholder="Review"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-xs-12">
							<input type="hidden" name="id" value="<?php echo e($product[0]->product_id); ?>">
							<?php echo e(csrf_field()); ?>

							<input type="submit" class="btn btn-primary" value="Send">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-5">
		<p class="judul-berita">Technical Specification</p>
		<p class="paragraf">
			<?php print $product[0]->product_specification; ?>
		</p>
	</div>
</div>
<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 2 seconds
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
	showDivs(slideIndex += n);
}

function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {slideIndex = 1}    
		if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";  
			}
			x[slideIndex-1].style.display = "block";  
		}
	</script>
	<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>