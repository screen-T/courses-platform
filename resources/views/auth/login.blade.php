@extends('layouts.layout')
@section('head')
  <link rel="stylesheet" href="{{url('css\style2.css')}}">
  <title> login </title> 
@endsection 
@section('content') <div class="container">
  <div class="row">
    <div class="">
      <div class="box">
        <h1 class="title">{{ __('Login') }}</h1>
          <form method="POST" class="container" action="{{ route('login') }}"> 
            @csrf 
            <div class="row ">
              <div class="col-lg-3  margin-p">EMAIL: </div>
              <div class="col-lg-6 col mt-2">
                <div class="form-floating">
                  <input id="email" type="email" placeholder="EMAIL" class=" form-control input-create" name="email" value="{{ old('email') }}" required autocomplete="email"> 
                  @error('email') 
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span> 
                  @enderror 
                  <label for="email" class="label">{{ __('Email Address') }}</label>
                </div>
              </div>
            </div>
        <div class="row">
          <div class="col-lg-3  margin-p"> Password: </div>
          <div class="col-lg-6 col mt-2">
            <div class="form-floating">
              <input 
                id="password"
                type="password" 
                class="form-control input-create" 
                name="password" 
                placeholder="password"
                required 
               > 
              @error('password') 
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span> 
              @enderror 
              <label for="password " class="label">{{ __('Password') }}</label>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-6 offset-md-3 mt-2">
          <div class="form-check ">
            <input class="form-check-input check " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">
              {{ __('Remember Me') }} @if (Route::has('password.request')) <a class="" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a> @endif
            </label>
          </div>
        </div>
      </div>
      <div class="row mb-0">
        <div class="offset-3 offset-sm-3 col-sm-2 col-4 mt-4 ">
          <button type="submit" class="btn-apply btn-register-mobile">
            {{ __('Login') }}
          </button> 
          
        </div>
      </div>
      
      
      </form>
      @section('footer')
      @stop
      
    </div>
  </div>
</div>
</div>
</div> @endsection