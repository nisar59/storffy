@extends('admin.template')
@section('content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-12">
          <div class="col-sm-12">
            <h1 class="m-0 text-dark">Users</h1>
          </div><!-- /.col -->
           <div class="col-sm-12 m-1 text-right">
           <a href="{{URL::to('users/create')}}" >  <button type="button" class="btn btn-success margin"  >  Add User</button></a>
          </div><!-- /.col -->
       @if(session()->has('message'))
         <div class="alert alert-success alert-dismissible fade show w-100" role="alert">
       {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
@endif
<div class="col-md-12">
          <table class="table table-bordered" width="100%" id="coupon">
            <thead class="bg-info">
                <tr>
                <th>ID</th>
                <th> Name</th>                
                <th>E_Mail</th>
                <!-- <th>Password</th>               -->
                <th>Status</th>
                <th>User Type</th> 
                <th>Created At</th> 
                <th>Action</th>             
              </tr>
            </thead>
            <tbody>
                 @foreach($data as $key)
              <tr>
                <td>{{$key->id}}</td>
                <td>{{$key->name}}</td>
                <td>{{$key->email}}</td>
                <!-- <td>{{$key->password}}</td> -->
                 @if($key->status == '1')
              <td> <a class="btn btn-success" href="{{url('users/statusupdate/'.$key->id)}}"> Activated </a></td>      
               @else
               <td> <a class="btn btn-warning" href="{{url('users/statusupdate/'.$key->id)}}"> Deactivated </a> </td>
               @endif
                <td>{{$key->user_type}}</td>

                <td>
                  {{$key->created_at}}
                </td>
              
               <td><a  class="btn btn-outline-info" href="{{url('users/edit/'.$key->id)}}">Edit</a> 
                <a  class="btn btn-danger" href="{{url('users/delete/'.$key->id)}}">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
@endsection
@section('js')
<script>
  $(document).ready(function() {
$('#coupon').DataTable();
  });
</script>
@endsection

