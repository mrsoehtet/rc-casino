@extends('auth.layout')
@section('title', 'Login')
@section('content')
<section class="login-block">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <form method="POST" action='{{ url("sys-private/$url") }}' class="md-float-material form-material">
          @csrf
          <div class="text-center">
            <img src="{{ asset('backend/png/logo.png') }}" style="width: 120px; height: 120px;" class="img-radius" alt="Royal Casino">
          </div>
          <div class="auth-box card">
            <div class="card-block">
              <div class="row m-b-20">
                <div class="col-md-12">
                  <h3 class="text-center txt-primary">{{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</h3>
                </div>
              </div>
              <p class="text-muted text-center p-b-5">Sign in with your account</p>
              <div class="form-group form-primary">
                <input id="username" type="text" class="form-control form-control-lg @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
                <span class="form-bar"></span>
                @error('username')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label class="float-label">Username</label>
              </div>
              <div class="form-group form-primary">
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <span class="form-bar"></span>
                <label class="float-label">Password</label>
              </div>
              <div class="row m-t-25 text-left">
                <div class="col-12">
                  <div class="checkbox-fade fade-in-primary">
                    <label>
                      <input type="checkbox" name="remember_me" id="remember_me" {{ old('remember_me') ? 'checked' : '' }}>
                      <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                      <span class="text-inverse">Remember me</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row m-t-30">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">LOGIN</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>
@endsection