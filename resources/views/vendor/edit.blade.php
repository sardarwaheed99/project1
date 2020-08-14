@extends('layouts.admin')


@section('content')
<style>
.form-inline .form-control {
    display: inline-block;
     width:  -webkit-fill-available; 
    vertical-align: middle;
}
.input-group {
  width:  -webkit-fill-available;
}
.custom-select
{
  width:  -webkit-fill-available;
}
</style>

<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
@if (sizeof($errors) > 0)
                        <div class="row">
                            <div class="col-md-12">

                                 <div class = "alert alert-danger">
                                    <ul>
                                       @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                       @endforeach
                                    </ul>
                                 </div>

                            </div>
                        </div>
                        @endif
    </div>
    </div>
<div class="row">

<div class="col-md-8" style="margin-left:30px;padding-top:20px">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Vendor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{route('vendor-update')}}">
                  {{ csrf_field() }}
                  <input type="hidden"  name="id" value="{{$vendor->id}}">
                <div class="card-body">
                  <div class="form-group">
                    <label for="Productname">Name:</label>
                    <input type="text" class="form-control"  name="name" id="" value="{{$vendor->name}}" placeholder="Enter Name">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="number">Number</label>
                    <input type="text" class="form-control"  name="number" id="Type" value="{{$vendor->number}}" placeholder="Add Number">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control"  name="address" value="{{$vendor->address}}" id="price" placeholder="Add Address">
                  </div>
                  
<br>

                  
                  
                
                <!-- /.card-body -->

                
           
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div> 
            
</div>
</div>


</div>
</div>


    @endsection