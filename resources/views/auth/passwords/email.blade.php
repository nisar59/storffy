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
    @if (session('status'))
    <div class="alert alert-success" role="alert">
    {{ session('status') }}
            </div>
        @endif

      <h2 class="login-box-msg">Reset Password</h2>
      <form action="{{ route('password.email') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Email" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
                  @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="row">          
          <!-- /.col -->
          <div class="col-4">
          <button type="submit" class="btn btn-primary">Send</button>
         </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
@endsection






















