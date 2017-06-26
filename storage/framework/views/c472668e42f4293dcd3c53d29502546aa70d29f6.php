<?php $__env->startSection('judul1'); ?>
Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- <div class="col-md-12 rata">
	<select style="padding: 6px 15px" onchange="showHint(this.value)">
		<option>Tipe Produk</option>
		<option value="2" <?php if(isset($active)){ if($active==2) echo 'selected';}?>>Service</option>
		<option value="3" <?php if(isset($active)){ if($active==3) echo 'selected';}?>>Maintenance</option>
		<option id="products" value="1" <?php if(isset($active)){ if($active==1) echo 'selected';}?>>Assembly and Fabrication</option>
		<option value="4" <?php if(isset($active)){ if($active==4) echo 'selected';}?>>Rental</option>
	</select>
</div> -->

<div class="col-md-12 rata">
		<div class="col-md-3 kotak">
				<button onclick="showHint(2)"><strong>Services</strong></button>
		</div>
		<div class="col-md-3 kotak">
				<button onclick="showHint(3)"><strong>Maintenance</strong></button>
		</div>
		<div class="col-md-3 kotak">
				<button onclick="showHint(1)"><strong>Assembly and Fabrication</strong></button>
		</div>
		<div class="col-md-3 kotak">
				<button onclick="showHint(4)"><strong>Rental</strong></button>
		</div>
		<div class="text-center" id="loading" style="margin-top:150px;">
			<i class="fa fa-spinner fa-spin fa-5x fa-fw"></i>
		</div>

		<div class="div2 batas-bawah" id="txtHint" style="margin-top: 50px"></div>

</div>

 <?php if(null == $active): ?>
 <script type="text/javascript">
		 $(document).ready(function(){
			 var xmlhttp = new XMLHttpRequest();
			 xmlhttp.onreadystatechange = function() {
				 if (this.readyState == 4 && this.status == 200) {
					 document.getElementById("txtHint").innerHTML = this.responseText;
					 $('#loading').hide();

				 }
			 };
			 xmlhttp.open("GET", "<?php echo e(url('')); ?>/products/type/" + 1, true);
			 xmlhttp.send();
			 $('#products').prop('selected',true);
		 });
 </script>
 <?php endif; ?>

<script>



	function showHint(str) {
		$('#loading').show();
		$('#txtHint').hide();

		if (str.length == 0) {
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
					$('#loading').hide();
					$('#txtHint').show();

				}
			};
			xmlhttp.open("GET", "<?php echo e(url('')); ?>/products/type/" + str, true);
			xmlhttp.send();

		}
	}

	<?php if(isset($active)): ?>
		window.onload=showHint(<?php echo e($active); ?>);
	<?php endif; ?>
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>