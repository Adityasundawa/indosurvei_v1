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
            <img src="{{url('/')}}/assets/logo/logo.png" alt="main-logo">
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
                                <h3>Forget Password</h3>
                            </div>
                            <x-jet-validation-errors class="alert alert-danger" />

                            <form class="account-wrap" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group mb-24 icon">
                                    <input type="email" class="form-control" placeholder="Email" id="email" name="email" :value="old('email')" required autofocus>
                                    <img src="assets/images/icon/sms.svg" alt="sms">
                                </div>
                                <div class="form-group mb-24">
                                    <button type="submit" class="default-btn">{{ __('Email Password Reset Link') }}</button>
                                </div>
                                <div class="form-group mb-24 text-center">
                                    <p class="account">Forgot It? <a href="{{url('')}}/login">Send me Back</a></p>
                                </div>
                            </form>
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

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
