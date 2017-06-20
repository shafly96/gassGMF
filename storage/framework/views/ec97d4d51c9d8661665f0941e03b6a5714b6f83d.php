<?php $__env->startSection('judul1'); ?>
GMF
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
AeroAsia
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata">
	<img src="<?php echo e(url('')); ?>/image/aboutGMF.jpg" style="width: 100%; height:auto ">
	
</div>
<div class="col-md-12 rata">
	<p class="paragraf">
		Started out in 1949, GMF AeroAsia originated as the Technical Division of Garuda Indonesia airline and transformed into independent entity in 2002, With more than 60 years of expertise as an Aircraft Maintenance Repair and Overhaul company. As the market leader in Indonesia and the global player in MRO industry, GMF AeroAsia provides its best quality services for airlines across the world that reaches more than 60 nations in 5 continents.
	</p>
	<p class="paragraf">
		GMF AeroAsia provides a wide-range aircraft maintenance services, such as Line Maintenance, Base Maintenance, Component Maintenance, Engine & APU Maintenance, Cabin Maintenance, Engineering Services, Material Services, Logistic & Bonded Services, Learning Services for various aircraft type such as Boeing 737, Boeing 747, Boeing 777, Airbus A320, Airbus A330, Bombardier CRJ1000, and ATR 72-600 and other outside aircraft service GMF Power Services, provides comprehensive repair and overhaul of industrial gas turbine engines. Offering an aircraft maintenance solution, GMF AeroAsia is complied with many certified authorities’ regulations, including Indonesia DGCA, United States FAA, European EASA, and many others.
	</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>