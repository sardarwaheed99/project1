@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="text-align: center">Total Users</span>
                <span class="info-box-number" style="text-align: center">
                <b>
                {{$total_recipients}}
                </b>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="text-align: center">Admins</span>
                <span class="info-box-number" style="text-align: center">{{$active_recipients}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text" style="text-align: center">Clients</span>
                <span class="info-box-number" style="text-align: center">{{$closed_recipients}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
         
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Recap Report</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Orders Review </strong>
                    </p>
                    <div class="progress-group">
                      Total Orders
                      <span class="float-right"><b>{{$total_drafts}}</b>/{{$total_drafts}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width:{{$total_percentage}}%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                    Delivered Orders
                      <span class="float-right"><b>{{$delivered_drafts}}</b>/{{$total_drafts}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: {{$delivered_percentage}}%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Not Delivered Orders</span>
                      <span class="float-right"><b>{{$undelivered_drafts}}</b>/{{$total_drafts}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: {{$undelivered_percentage}}%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                    Returned Orders
                      <span class="float-right"><b>{{$returned_drafts}}</b>/{{$total_drafts}}</span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: {{$returned_percentage}}%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success">Total </span>
                      <h5 class="description-header">{{$total_amount}}</h5>
                      <span class="">Total Amount</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success">Delivered Amount</span>
                      <h5 class="description-header">{{$month_total}}</h5>
                      <span class="">Delivered Amount</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success">Un-Delivered Amount</span>
                      <h5 class="description-header">{{$month_notdelivered  }}</h5>
                      <span class="">Un-Delivered Amount</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-warning">Returned Amount</span>
                      <h5 class="description-header">{{$month_returned}}</h5>
                      <span class="">Returned Amount</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>

</div>

@endsection

