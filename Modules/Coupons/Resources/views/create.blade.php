@extends('admin.template')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Coupons</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Main content -->
  <div class="container">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create Coupons</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="store">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Coupon For</label>
                    <input type="text" name="for" class="form-control" id="exampleInputPassword1" placeholder="Coupon For">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No of Coupons</label>
                    <input type="number" name="no" class="form-control" id="exampleInputPassword1" placeholder="No of Coupons">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>
@endsection