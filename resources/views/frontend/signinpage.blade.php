@extends('frontendtemplate')

@section('content')

	<div class="login-wrap" style="margin-top: 100px; margin-bottom: 50px;">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>


		
		<div class="login-form">
			<div class="row">
			<div class="sign-in-htm">
				<form method="post" action="{{ route('login') }}">
			@csrf
				<div class="group">
					<label for="email" class="label">{{ __('E-Mail Address') }}</label>
					<input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="group">
					<label for="password" class="label">{{ __('Password') }}</label>
					<input id="pass" type="password" class="input @error('password') is-invalid @enderror" data-type="password" name="password" required autocomplete="current-password">

					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

				</div>


				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					@if (Route::has('password.request'))
					<a href="{{ route('password.request') }}">Forgot Password?</a>
					@endif
				</div>
				</form>
			</div>

			
			</div>

			<div class="row">
		
			<div class="sign-up-htm">
				<form method="POST" action="{{ route('user.store') }}">
            @csrf
				<div class="group form-group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

					@error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="pass" type="password" class="input @error('password') is-invalid @enderror" data-type="password" name="password">

					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="group">
					<label for="password-confirm" class="label">Confirm Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password_confirmation">
				</div>

				<div class="group">
					<label for="email" class="label">Email</label>
					<input id="pass" type="text" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</label>
				</div>
				</form>
			</div>
		
		</div>
		</div>

	</div>
</div>

@endsection