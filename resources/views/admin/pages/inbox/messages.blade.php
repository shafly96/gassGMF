@extends('admin.master.master')

@section('content')

<div id="myModal" class="modal fade" role="dialog"></div>

@if (session('success'))
		<div class="alert alert-success">
				{{ session('success') }}
		</div>
@endif

<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<i class="fa fa-info-circle"></i><h3 class="box-title">Messages List</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<table id="example1" class="table table-bordered table-striped dt-responsive nowrap">
					<thead>
						<tr>
							<th>No</th>
							<th>Sender Email</th>
							<th>Sender Phone No</th>
							<th>Received At</th>
              <th>Action</th>
						</tr>
					</thead>
					<tbody>
						<div style="display:none">
								{{$counter=0}}
						</div>
						@if(isset($messages))
							@foreach($messages as $message)
							<div style="display:none">
									{{$counter+=1}}
							</div>
							<tr>
								<td>{{$counter}}</td>
								<td>{{$message->message_email}}</td>
								<td>{{$message->message_telephone}}</td>
                <td>{{$message->message_timestamp}}</td>
								<td>
									<a href="{{url('/')}}/inbox/deletemessage/{{$message->message_id}}" class="btn btn-danger" id="delete">Delete</a>
									<a onclick="viewmessage({{$message}})" class="btn btn-info" id="delete">View Message</a>

								</td>
							</tr>
							@endforeach

						@endif
          </tbody>
				</table>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div><!-- /.col -->
</div>

@include('admin.master.script')

<script type="text/javascript">
	$('#example1').DataTable();
  function viewmessage(message){
    var c = message;
    swal({
            title: 'Message',
            html: true,
            text:  '<div class="form-group"><label>Sender`s Email</label><p>'+
            c.message_email +
            '</p><label>Sender`s Phone Number:</label><p>'+
            c.message_telephone+
            '</p><label>Message Content :</label><p>'+
            c.message_comment+
            '</p><label>Received at:</label><p>'+
            c.message_timestamp+
            '</p></div>',
            showCloseButton: true,
            confirmButtonText:
              'Close'
          });
        //document.getElementById("wek").innerHTML("haoijiojha");

  };
</script>

@stop
