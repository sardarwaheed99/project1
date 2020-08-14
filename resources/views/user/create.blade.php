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
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{route('user-save')}}">
                  {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="Productname">User Name:</label>
                    <input type="text" class="form-control"  name="name" id="" placeholder="Enter Name">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="email">User Email</label>
                    <input type="email" class="form-control"  name="email" id="Type" placeholder="email">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  name="password" id="price" placeholder="password">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="confirmpassword">Confirm Password</label>
                    <input type="password" class="form-control"  name="password_confirmation" id="" >
                  </div>

<br>

                  
                  
                
                <!-- /.card-body -->

               
            </div>
           
            
            
</div>
<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
</div>


</div>
</div>


    @endsection