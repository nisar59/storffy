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
         <a href="{{URL::to('coupons/create')}}" >  <button type="button" class="btn btn-success margin"  >  Generate Coupon</button></a>
          </div><!-- /.col -->
          <table class="table table-inverse">
            <thead>
              <tr>
                <th>ID</th>
                <th>Coupon Name</th>
                <th>Coupon For</th>
                <th>Coupon No#</th>
             </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>MyCoupom</td>
                <td>1213</td>

              </tr>
            </tbody>
          </table>
         <!--  <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Coupons</li>
            </ol>
          </div> --><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Main content -->

@endsection

