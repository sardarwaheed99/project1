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
                <h3 class="card-title">Add Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
        <form  method="POST" enctype="multipart/form-data" action="/project/product/store" >
        
                  {{ csrf_field() }}
                 
                <div class="card-body">
                  <div class="form-group">
                    <label for="Productname">Product Name:</label>
                    <input type="text" class="form-control"  name="name" id="ProductName" placeholder="Enter Name">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="Type">Type:</label>
                    <input type="text" class="form-control"  name="type" id="Type" placeholder="Product Type">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control"  name="price" id="price" placeholder="Product Price">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control"  name="quantity" id="quantity" >
                  </div>

                <br>
   
                  <div class="form-group">
                    <label for="file">File input</label>
                    <br>
                    <div class="input-group" style="width: -webkit-fill-available">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="attachment" id="exampleInputFile">
                        <label class="custom-file-label"  for="exampleInputFile">Choose file</label>
                      </div>
                     
                    </div>
                  </div>
                  
                </div> 
                 <!-- /.card-body -->
               
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>              
            </div>
          
  
            

          </div>


</div>
</div>


    @endsection