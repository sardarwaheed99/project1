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
                <h3 class="card-title">View Users</h3>
                <div style="float:right"class="col-md-2">
                <a class="btn btn-block bg-gradient-primary" href="{{route('user-create')}}" > Add User</a>  
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                  <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Creared At</th>
      <th scope="col">Action</th>
    </tr>
                  </thead>
                  <tbody>
  @foreach($data as $y)
  <tr>
  <th>{{$y->id}} </th>
  <td>{{$y->name}} </td>
  <td>{{$y->email}} </td>
  <td>{{$y->created_at}} </td>
  
  <td> <a class="btn" href="/project/user/delete/{{$y->id}}"><i class="fa fa-trash"></i></a> 
   <a class="btn" href="/project/user/edit/{{$y->id}}"><i class="fa fa-pencil"></i></a> </td>   
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
@endsection
