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

<div class="col-md-8" style="padding-top:10px;padding-left:30px">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Appointment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{route('carwash-save')}}">
                  {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" class="form-control"  name="address" id="ProductName" placeholder="Enter Address">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="Number">Number</label>
                    <input type="text" class="form-control"  name="number" id="Type" placeholder="Enter Number">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control"  name="date" id="price" placeholder="Product Date">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="time">Time</label>
                    <input type="text" class="form-control"  name="time" placeholder="Format Hr:Min (24hrs)" >
                  </div>

<br>

                
                  
                </div>
                <!-- /.card-body -->

                
            </div>
            <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            
            

          </div>


</div>
</div>


    @endsection