<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>NS Game Shop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="{{asset('registers/fonts/linearicons/style.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('registers/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form method="POST" action="{{ route('register') }}">
					@csrf
					<h3>New Account?</h3>
					<!-- username
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Username">
					</div>
					-->
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="Username">
					</div>
					@error('username')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
					<!-- name
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" placeholder="Name">
					</div>
					-->
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
					</div>
					@error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
					
					<!-- email
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Email">
					</div>
					-->
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
					</div>
					@error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
					<!-- password
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password">
					</div>
					-->
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
					</div>
					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror

					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
					</div>
					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
					<!-- phone
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="password" class="form-control" placeholder="Phone">
					</div>
					-->
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="Phone">
					</div>
					@error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                	</span>
                    @enderror
					<!--
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="password" class="form-control" placeholder="Address">
					</div>
					-->
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" placeholder="Address">
					</div>
					@error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
					<button type="submit" class="btn btn-primary">
						{{ __('Register') }}
					</button>
				</form>
				<img src="{{asset('registers/images/image-2.png')}}" alt="" class="image-2">
			</div>
			
		</div>

		
	
		<script src="{{asset('registers/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('registers/js/main.js')}}"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>