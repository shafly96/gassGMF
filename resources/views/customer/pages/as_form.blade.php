@extends('customer.master.master')

@section('judul1')
After Sales & Parts Service
@stop

@section('judul2')
@stop

@section('content')
<div class="col-md-12 rata" style="padding-top: 50px">
  <div class="box">
    <div class="box-header with-border">
    <p class="judul-berita">GASS Product Warranty Claims</p>
    </div>
    <div class="box-body">
        <form action="{{url('/')}}/aftersales" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                      <label for="exampleInputPassword1">Company Name</label>
                      <input type="text" class="form-control" name="company" placeholder="Insert company name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Contact Name</label>
                      <input type="text" class="form-control" name="contact" placeholder="Insert contact name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Email</label>
                      <input type="text" class="form-control" name="email" placeholder="Insert Email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Machine Serial Number</label>
                      <input type="text" class="form-control" name="serial" placeholder="Insert Machine Serial Number" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Machine Out of Service</label> <br>
                      <input type="radio"  name="out" value="1" required> Yes
                      <input type="radio" name="out" value="0" required> No

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Product Type</label>
                      <select class="form-control" name="tipe" required>
                        <option value="">Choose product</option>
                        @isset($products[0])
                          <optgroup label="Assembly and Fabrication">
                              @foreach($products as $product)
                                @if($product->product_tipe == 1)
                                <option value="{{$product->product_id}}">{{$product->product_name}}</option>
                                @endif
                              @endforeach
                          </optgroup>
                          <optgroup label="Service">
                            @foreach($products as $product)
                              @if($product->product_tipe == 2)
                              <option value="{{$product->product_id}}">{{$product->product_name}}</option>
                              @endif
                            @endforeach
                          </optgroup>
                          <optgroup label="Maintenance">
                            @foreach($products as $product)
                              @if($product->product_tipe == 3)
                              <option value="{{$product->product_id}}">{{$product->product_name}}</option>
                              @endif
                            @endforeach
                          </optgroup>
                          <optgroup label="Rental">
                            @foreach($products as $product)
                              @if($product->product_tipe == 4)
                              <option value="{{$product->product_id}}">{{$product->product_name}}</option>
                              @endif
                            @endforeach
                          </optgroup>
                          @endisset
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description of Issue</label><a href="#" data-toggle="tooltip" data-placement="bottom" title="Insert the general information about the issue"><i class="fa fa-info-circle" style="margin-left:10px;"></i></a>
                      <textarea class="form-control" name="description" rows="8" cols="80" placeholder="Insert issue description"></textarea>
                    </div>
                    <div class="form-group">
                          <label for="media">Upload photo(s):</label>
                          <input type="file" class="form-control" name="media[]" id="media" multiple>
                    </div>

                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary" id="simpan">Save</button>

                    </div>
        </form>
    </div>

  </div>
</div>
@stop
