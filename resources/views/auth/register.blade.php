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
		<div
			class="d-flex align-items-center flex-wrap justify-content-center mt-3"
		>
			<div class="container" style="margin-bottom:2rem">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="/template/vendors/images/register-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Register To DeskApp</h2>
							</div>
							<form method="POST" action="{{route('register')}}">
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
								<div class="input-group custom" value="{{ __('Name')}}">
									<input
										type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
										class="form-control form-control-lg"
										placeholder="Username"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="icon-copy dw dw-user1"></i
										></span>
									</div>
								</div>
                                <div class="input-group custom" value="{{ __('Email')}}">
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
								<div class="input-group custom" value="{{ __('Password')}}">
									<input
										type="password" name="password" required autofocus autocomplete="current-password"
										class="form-control form-control-lg"
										placeholder="Password"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>
								<div class="input-group custom" value="{{ __('Confirm Password')}}">
									<input
										type="password" name="password_confirmation" required autofocus autocomplete="new-password"
										class="form-control form-control-lg"
										placeholder="Confirm Password"
									/>
									<div class="input-group-append custom">
										<span class="input-group-text"
											><i class="dw dw-padlock1"></i
										></span>
									</div>
								</div>
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
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
											<button
												class="btn btn-primary btn-lg btn-block"
												>{{ __('Register')}}</button
											>
										</div>
									</div>
								</div>
                                <div class="row mt-2">
									<div class="col-sm-12">
										<div class="font-16 weight-600 text-center">
											Already have an account? <a href="login">Login</a>
										</div>
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
        @stack('scripts')
    </body>
</html>
