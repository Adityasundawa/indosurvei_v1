<!doctype html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Link Of CSS --> 
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/remixicon.css">
		<link rel="stylesheet" href="assets/css/boxicons.min.css">
		<link rel="stylesheet" href="assets/css/iconsax.css">
		<link rel="stylesheet" href="assets/css/metismenu.min.css">
		<link rel="stylesheet" href="assets/css/simplebar.min.css">
		<link rel="stylesheet" href="assets/css/calendar.css">
        <link rel="stylesheet" href="assets/css/sweetalert2.min.css">
		<link rel="stylesheet" href="assets/css/jbox.all.min.css">
		<link rel="stylesheet" href="assets/css/editor.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/loaders.css">
		<link rel="stylesheet" href="assets/css/header.css">
		<link rel="stylesheet" href="assets/css/sidebar-menu.css">
		<link rel="stylesheet" href="assets/css/footer.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.svg">
		<!-- Title -->
		<title>Indo Survei</title>
    </head>

    <body class="body-bg-f8faff">
		<!-- Start Preloader Area -->
		<div class="preloader">
            <img src="assets/images/main-logo.svg" alt="main-logo">
        </div>
		<!-- End Preloader Area -->

		<!-- Start Account Area -->
        <div class="account-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="account-content">
                            <div class="account-header">
                                <a href="index.html">
                                    <img src="{{url('/')}}/assets/logo/logo.png" style="width: 115px" alt="main-logo">
                                </a>
                                <h3>Log In</h3>
                            </div>

                            <form class="account-wrap">
                                <div class="form-group mb-24 icon">
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus>
                                    <img src="assets/images/icon/sms.svg" alt="sms">
                                </div>
                                <div class="form-group mb-24 icon">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                                    <img src="assets/images/icon/key.svg" alt="key">
                                </div>
                                <div class="form-group mb-24">
                                    <div class="row">
                                        <div class="col-6">
                                            <x-jet-checkbox id="remember_me" name="remember" />
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="forgot">{{ __('Forgot your password?') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-24">
                                    <button type="submit" class="default-btn">Log In</button>
                                </div>
                                <div class="form-group mb-24 text-center">
                                    <p class="account">Not A Member? <a href="register.html">Create An Account</a></p>
                                </div>
                            </form>

                            <ul class="account-social-link">
                                <a class="btn btn-outline-dark" href="{{ url('auth/google') }}"> <span class="d-flex justify-content-center align-items-center">
										<i class='bx bxl-google me-2'></i>
										<span>Log In with Google</span>
									</span>
								</a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Account Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="ri-arrow-up-s-fill"></i>
			<i class="ri-arrow-up-s-fill"></i>
		</div>
		<!-- End Go Top Area -->

        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script> 
        <script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/geticons.js"></script>
        <script src="assets/js/sweetalert2.all.min.js"></script>
        <script src="assets/js/jbox.all.min.js"></script>
        <script src="assets/js/editor.js"></script>
		<script src="assets/js/form-validator.min.js"></script>
		<script src="assets/js/contact-form-script.js"></script>
		<script src="assets/js/ajaxchimp.min.js"></script>
		<script src="assets/js/custom.js"></script>
    </body>
</html>
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <a href="{{ url('auth/google') }}" style="margin-top: 0px !important;background: green;color: #ffffff;padding: 5px;border-radius:7px;" class="ml-2">
            <strong>Google Login</strong>
          </a> 
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
