
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle')</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="/template/vendors/images/apple-touch-icon.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="/template/vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="/template/vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="/template/vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="/template/vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="/template/vendors/styles/style.css" />
        @stack('stylesheets')
	</head>
    <body class="register-page-wrap">

		<div class="d-flex align-items-center flex-wrap justify-content-center mt-3">
			<div class="container" style="margin-bottom: 2rem;">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="/template/vendors/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Login To DeskApp</h2>
							</div>


							<form method="POST" action="{{ route('login') }}">
                                @csrf

								<div class="select-role">
									<div class="btn-group btn-group-toggle" data-toggle="buttons">
										<label class="btn active">
											<input type="radio" name="options" id="admin" />
											<div class="icon">
												<img
													src="/template/vendors/images/briefcase.svg"
													class="svg"
													alt=""
												/>
											</div>
											<span>I'm</span>
											Manager
										</label>
										<label class="btn">
											<input type="radio" name="options" id="user" />
											<div class="icon">
												<img
													src="/template/vendors/images/person.svg"
													class="svg"
													alt=""
												/>
											</div>
											<span>I'm</span>
											Employee
										</label>
									</div>
								</div>

                                @if (Route::is('register'))
								<div class="input-group custom">
									<input
                                        type="text"
										class="form-control form-control-lg"
										placeholder="Username"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>
                                @endif


								<div class="input-group custom" value="{{ __('Email') }}">
									<input
                                        type="email" name="email" :value="old('email')" required autofocus autocomplete="username"
										class="form-control form-control-lg"
										placeholder="Email"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>

								<div class="input-group custom" value="{{ __('Password') }}">
									<input
                                        name="password" required autocomplete="current-password"
										type="password"
										class="form-control form-control-lg"
										placeholder="password"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>

                                 @if (Route::is('register'))
								<div class="input-group custom">
									<input
										type="password"
										class="form-control form-control-lg"
										placeholder="confirmation password"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>
                                @endif

								<div class="row pb-30">
									<div class="col-6">
										<div class="custom-control custom-checkbox">
											<input
												type="checkbox"
												class="custom-control-input"
												id="customCheck1"
											/>
											<label class="custom-control-label" for="customCheck1"
												>Remember</label
											>
										</div>
									</div>

                                    @if (Route::has('password.request'))
									<div class="col-6">
										<div class="forgot-password font-14">
											<a href="{{ route('password.request') }}">Forgot Password ?</a>
										</div>
									</div>
                                    @endif

								</div>

								<div class="row">
									<div class="col-sm-12">
                                        @if (Route::is('login'))
										<div class="input-group mb-0">
											<button class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
                                        </div>
                                        @endif

                                        @if (Route::is('register'))
                                        <div class="input-group mb-0">
											<a class="btn btn-primary btn-lg btn-block" href="{{route ('register')}}">Register</a
											>
										</div>
                                        @endif

										@if(route::is('login'))
										<div class="font-14 pt-20 pb-10 text-center" data-color="#707373">
											Haven't Account? <a href="{{route ('register')}}"><strong>Register</strong></a> in here
										</div>
										@endif

										@if(route::is('register'))
										<div class="font-14 pt-20 text-center" data-color="#707373">
											Have Account? <a href="{{route ('login')}}"><strong>Login</strong></a> in here
										</div>
										@endif

									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- js -->
		<script src="/template/vendors/scripts/core.js"></script>
		<script src="/template/vendors/scripts/script.min.js"></script>
		<script src="/template/vendors/scripts/process.js"></script>
		<script src="/template/vendors/scripts/layout-settings.js"></script>
        @stack('script')

	</body>
    </html>
