@extends('admin.template')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Main content -->
  <div class="container">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create User</h3>
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

              <form method="POST" action="{{url('users/update/' .$data->id)}}">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name" value="{{$data->name}}">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email" value="{{$data->email}}">
                  </div>
                  
                      
                   <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" id="ttlprice"  class="form-control" id="exampleInputPassword1" placeholder="Password" value=" Crypt::decrypt({{$data->password}})" >
                  </div>
                 <div class="form-group">
                    <label for="exampleInputPassword1">User Type</label>
                    <select class="c-select form-control" name="user_type">
                      <option value="admin" {{ $data->user_type  == 'admin' ? 'selected' : '' }}>Admin</option>
                      <option value="viewer"  {{ $data->user_type  == 'viewer' ? 'selected' : '' }}>Viewer</option>
                    </select>
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
  @section('js')
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