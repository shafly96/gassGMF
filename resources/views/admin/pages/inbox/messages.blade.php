@extends('admin.master.master')

@section('content')


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Message Detail</h4>
      </div>
      <div class="modal-body">
				<label>Sender Email</label>
        <p id="email"></p>
				<label>Sender Telephone Number</label>
				<p id="telp"></p>
				<label>Message Content</label>
				<p id="content"></p>
				<label>Received At</label>
				<p id="received"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

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
									<a onclick="viewmessage({{$message}})" class="btn btn-info" data-toggle="modal" data-target="#myModal" id="delete">View Message</a>

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
		$( "#email" ).html(c.message_email);
		$( "#telp" ).html(c.message_telephone);
		$( "#content" ).html(c.message_comment);
		$( "#received" ).html(c.message_timestamp);
  };
</script>

@stop
