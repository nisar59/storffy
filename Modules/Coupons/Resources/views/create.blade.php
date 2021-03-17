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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              <form method="POST" action="{{url('coupons/store')}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Coupon For</label>
                    <select class="c-select form-control" name="social">
                      <option selected>Coupon For</option>
                      <option value="youtube">Youtube</option>
                      <option value="instagram">Instagram</option>
                      <option value="facebook">Facebook</option>
                    </select>
                  </div>
                      
                       <div class="form-group">
                    <label for="exampleInputPassword1">Total Price</label>
                    <input type="number" name="total_price" id="ttlprice" min="100" class="form-control" id="exampleInputPassword1" placeholder="No of Coupons" >
                  </div>
                       <div class="form-group">
                    <label for="exampleInputPassword1">Price Per Coupon</label>
                  <input type="number" name="price_per" min="5" class="form-control"  placeholder="No of Coupons" id="prpercoupon"  onchange="myFunction()" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Total Number Of Coupon</label>
                    <input type="text" readonly name="" class="form-control"  placeholder="No of Coupons" id="ttlcoupon">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
  </div>
  <script>
     function myFunction() {
   var x = document.getElementById("ttlprice").value;
   var y = document.getElementById("prpercoupon").value;
   if(x/2 > y){
   var c = x/y;
     document.getElementById("ttlcoupon").value=parseInt(c) ;
     document.getElementById("ttlprice").style.border = '1px #ced4da solid' ;
  document.getElementById("prpercoupon").style.border = '1px #ced4da solid' ;
}
else{
  document.getElementById("ttlprice").style.border = '1px red solid' ;
  document.getElementById("prpercoupon").style.border = '1px red solid' ;
 
}
   
  
}
   


  </script>
@endsection
