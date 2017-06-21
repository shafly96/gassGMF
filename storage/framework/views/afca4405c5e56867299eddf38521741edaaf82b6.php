<?php $__env->startSection('judul1'); ?>
About
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul2'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="col-md-12 rata">
	<div class="tab">
		<button id="gmf" autofocus>GMF</button>
		<button id="gass">GASS</button>
		<button id="testimoni">Testimoni</button>
	</div>
</div>
<div class="gass">
	<div class="col-md-12 rata">
		<img src="<?php echo e(url('')); ?>/image/gass.jpg" style="width: 100%; height:auto " class="img-responsive">
	</div>
	<div class="col-md-12 rata">
		<p class="paragraf">
			GMF Aircraft Support Services is the leading ground support equipment maintenance and services in terms of quality, reliability, safety, innovation and network coverage. 

			Offering a comprehensive range of services and products, GASS is able to provide an “all-inclusive” service package in addition to managing Ground Support Equipment.
			<ul>
				<li>Aircraft Maintenance Ground Handling</li>
				<li>Maintenance Ground Support Equipment</li>
				<li>Assembly and Fabrication Ground Support Equipment</li>
				<li>Assembly and Maintenance ULD and Meal Trolley</li>
			</ul>

		</p>
	</div>
</div>
<div class="gmf">
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
</div>
<div class="testimoni">
	<div class="col-md-12 rata" style="padding-top: 50px">
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('../image/bg.jpg'); background-size:cover"></div>
			<p class="paragraf"><strong>Lorem Ipsum</strong></p>
			<p class="paragraf">
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
			</p>
		</div>
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('../image/bg.jpg'); background-size:cover"></div>
			<p class="paragraf"><strong>Lorem Ipsum</strong></p>
			<p class="paragraf">
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
			</p>
		</div>
		<div class="col-md-4" style="text-align:center">
			<div style="margin:0 auto; position: relative; border-radius: 50%; width: 150px; height: 150px; background:url('../image/bg.jpg'); background-size:cover"></div>
			<p class="paragraf"><strong>Lorem Ipsum</strong></p>
			<p class="paragraf">
				Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
			</p>
		</div>
	</div>
</div>
<script>
	$("#gmf").click(function(){
		$(".gmf").show();
		$(".gass").hide();
		$(".testimoni").hide();
	});

	$("#gass").click(function(){
		$(".gass").show();
		$(".gmf").hide();
		$(".testimoni").hide();
	});

	$("#testimoni").click(function(){
		$(".testimoni").show();
		$(".gmf").hide();
		$(".gass").hide();
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('customer.master.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>