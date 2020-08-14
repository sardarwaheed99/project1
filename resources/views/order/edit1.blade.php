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
                <h3 class="card-title">Edit Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-inline" method="POST" enctype="multipart/form-data" action="{{route('order-update')}}">
                  {{ csrf_field() }}
                  <input type="hidden" name="id" value="{{$order->id}}">

                  <input type="hidden" name="product_id" value="{{$order->products->id}}">
                <div class="card-body">
                <div class="form-group">
                    <label for="Productname">Product Name</label>
                    <input type="text" class="form-control"  name="product_name" id="" value="{{$order->products->p_name}}" disabled>
                  </div>  
                  <br>
                <div class="form-group">
                    <label for="Productname">Quantity</label>
                    <input type="number" class="form-control"  name="quantity" id="" value="{{$order->quantity}}" disabled>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="number">Number</label>
                    <input type="text" class="form-control"  name="number" id="Type" placeholder="Add Number" value="{{$order->phone_no}}" disabled>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control"  name="address" id="price" placeholder="Add Address" value="{{$order->address}}" disabled>
                  </div>
                  
<br>

<div class="form-group">
                 <label for="status">Status</label>
                <!-- <input type="text" class="form-control"  name="amount" id="" placeholder="Amount"> -->
            <select class="form-control js-example-basic-single" name="level">
                <option value="">Please Select </option>
                <option  value="ordered" <?php if($order->level=="ordered") { ?> selected <?php } ?> >Ordered </option>
                <option value="delievered" <?php if($order->status=="delievered") { ?> selected <?php } ?> > delievered </option>
                <option value="returned" <?php if($order->status=="returned") { ?> selected <?php } ?> >Returned </option>

            </select>
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
</div>


    @endsection