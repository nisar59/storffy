@extends('layouts.app')
@section('content')

@php
$route=Route::current()->uri();
@endphp
<div class="login-box">
  <div class="register-logo">
    <a href="{{url('/')}}"><img width="20%" src="{{asset('public/img/logo-ima.png')}}" alt=""></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      @if($route=='creator/login')
      <h2 class="login-box-msg">Hi Creator!</h2>
      @elseif($route=='admin/login')
      <h2 class="login-box-msg">Hi Admin!</h2>
      @else
      <h2 class="login-box-msg">Hello viewer!</h2>
      @endif
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="login" method="post">
        @csrf
         @if(Session::has('Error'))
         <p class="text-danger text-center">{{Session::get('Error')}}</p>
         @endif
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="password/reset">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection