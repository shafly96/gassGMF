@extends('customer.master.master')

@section('judul1')
Products
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata">
	<select style="padding: 6px 15px" onchange="showHint(this.value)">
		<option>Tipe Produk</option>
		<option value="2" <?php if(isset($active)){ if($active==2) echo 'selected';}?>>Service</option>
		<option value="3" <?php if(isset($active)){ if($active==3) echo 'selected';}?>>Maintenance</option>
		<option value="1" <?php if(isset($active)){ if($active==1) echo 'selected';}?>>Assembly and Fabrication</option>
		<option value="4" <?php if(isset($active)){ if($active==4) echo 'selected';}?>>Rental</option>
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
			xmlhttp.open("GET", "{{url('')}}/products/type/" + str, true);
			xmlhttp.send();
		}
	}

	@isset($active)
		window.onload=showHint({{$active}});
	@endisset
</script>
@stop
