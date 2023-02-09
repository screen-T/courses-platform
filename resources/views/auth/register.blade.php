@section('head')
<link rel="stylesheet" href="{{url('css\style2.css')}}">
<title> register </title> 
@endsection 
@extends('layouts.layout') 
@section('content') 
<div class="container">
	<div class="">
		<div class="">
			<div class="box">
				<div class="title">{{ __('Register') }}</div>
				<div class="">
					<form method="POST" action="{{ route('register') }}"> @csrf <div class="row">
							<div class="col-lg-3  margin-p">{{ __('Name') }} :</div>
							<div class="col-lg-6 col mt-2">
								<div class="form-floating">
									<input id="name" type="text" class="form-control input-create @error('name') is-invalid @enderror" placeholder="name" name="name" required> @error('name') <span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span> @enderror <label for="name " class="label">full Name</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3  margin-p"> {{ __('Email Address') }} :</div>
							<div class="col-lg-6 col mt-2">
								<div class="form-floating">
									<input id="email" type="email" class="form-control input-create @error('email') is-invalid @enderror" name="email" required placeholder="email"> @error('email') <span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span> @enderror <label for="email" class="label">Email address</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3  margin-p"> {{ __('Password') }} :</div>
							<div class="col-lg-6 col mt-2">
								<div class="form-floating">
									<input id="password" placeholder="password" type="password" class="form-control input-create @error('password') is-invalid @enderror" name="password" required> @error('password') <span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span> @enderror <label for="password" class="label">Password</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3  margin-p"> {{ __('Confirm Password') }}</div>
							<div class="col-lg-6 col mt-2">
								<div class="form-floating">
									<input id="password-confirm" placeholder="pwd" type="password" class="form-control input-create" name="password_confirmation" required autocomplete="new-password">
									<label for="password-confirm" class="label">Confirm Password</label>
								</div>
							</div>
						</div>
						<div class="row mb-0">
							<div class="col-md-6 offset-md-3 mt-4">
								<button type="submit" class="btn-apply">
									{{ __('Register') }}
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> 
@section('footer')
      @stop
@endsection