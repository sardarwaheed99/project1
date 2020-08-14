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
                                @if($errors)
                                    @foreach ($errors->all() as $error)
                                      <div class = "alert alert-danger text-center">
                                        {{ $error }}
                                      </div>
                                       @endforeach
                                 @endif

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
                <h3 class="card-title">Add Product To Cart</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{route('cart-save')}}">
                  {{ csrf_field() }}
                  <input type="hidden" name="product_id" value="{{$product->id}}">
                <div class="card-body">
                <div class="form-group">
                    <label for="Productname">Product Name</label>
                    <input type="text" class="form-control"  name="product_name" id="" value="{{$product->p_name}}" disabled>
                  </div>  
                  <br>
                <div class="form-group">
                    <label for="Productname">Quantity</label>
                   <input type="number" class="form-control"  name="quantity" id=""  value="{{old('quantity')}}">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="number">Number</label>
                    <input type="text" class="form-control"  name="number" id="Type" value="{{old('number')}}" placeholder="Add Number">
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control"  name="address" id="price" value="{{old('address')}}" placeholder="Add Address">
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