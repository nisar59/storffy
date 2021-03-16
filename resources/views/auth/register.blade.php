@extends('layouts.app')

@section('content')
@php
$route=Route::current()->uri();
@endphp

<div class="register-box">
  <div class="register-logo">
    <a href="{{url('/')}}"><img width="20%" src="{{asset('public/img/logo-ima.png')}}" alt=""></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">

      <h2 class="login-box-msg">Hi Welcome!</h2>
  
      @if($errors->any())
      @foreach($errors->all() as $error)
      <li class="text-danger" style="font-size: 12px;">{{$error}}</li>
      @endforeach
    @endif
      <form action="{{ Route('register') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="name" placeholder="Full name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Retype password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="refferal" placeholder="Refferal (optional)">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        @if($route=='creator/register')
        <input type="hidden" name="utype" value="creator">
        @else
        <input type="hidden" name="utype" value="viewer">

        @endif
        <div class="row">
          <div class="col-8">
            <div class="">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
               I agree to the <a href="#">terms</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@endsection