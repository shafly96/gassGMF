<?php $__env->startSection('judul1'); ?>
Products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata">
	<select style="padding: 6px 15px" onchange="showHint(this.value)">
		<option>Tipe Produk</option>
		<option value="2">Service</option>
		<option value="3">Maintenance</option>
		<option value="1">Assembly and Fabrication</option>
		<option value="4">Rental</option>
	</select>
	<div class="div2 batas-bawah" id="txtHint" style="margin-top: 50px"></div>
</div>

<script>
	function showHint(str) {
		if (str.length == 0) { 
			document.getElementById("txtHint").innerHTML = "";
			return;
		} else {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("txtHint").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "<?php echo e(url('')); ?>/products/type/" + str, true);
			xmlhttp.send();
		}
	}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>