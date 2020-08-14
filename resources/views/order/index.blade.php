@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 >View Your Orders</h3>
                <div style="float:right"class="col-md-2">
                <!-- <a class="btn btn-block bg-gradient-primary" href="{{route('vendor-create')}}" > Add Vendor</a>   -->
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                  <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Bill</th>
      <th scope="col">Status </th>
    
      <th scope="col">Action</th>
    </tr>
                  </thead>
                  <tbody>
  @foreach($orders as $y)
  <tr>
  <th>{{$y->id}} </th>
  <td>{{$y->products->p_name}} </td>
  <td>{{$y->phone_no}} </td>
  <td>{{$y->address}} </td>
  <td>{{$y->quantity}} </td>
  <td>{{$y->amount}} </td>
  <td>{{$y->level}} </td>

    
  
  <td> <a class="btn" onclick="deleteItem()" href="/project/order/delete/{{$y->id}}"><i class="fa fa-trash"></i></a> 
   <a class="btn" href="/project/order/edit/{{$y->id}}"><i class="fa fa-pencil"></i></a>  </td>
  <!-- <td> <a class="btn btn-block bg-gradient-primary" href="/project/cart/edit/{{$y->id}}"> Place Order </td>   -->

</tr>
  @endforeach
    
  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
             
            </div>


          </div>
        </div>
      </div>
</section>
</div>
<script>

  function deleteItem() {
    window.alert('Are you sure to delete this item kdkkd?');
  }
</script>
@endsection
