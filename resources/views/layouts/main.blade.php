<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indosurvei</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        html,
        body {
            height: 100vh;
            font-family: 'Poppins', sans-serif
        }

        .w-125{
            width: 125px;
        }

        .btn-warm {
            background: #6bd3d2;
            color: white;
        }

        .btn-warm:hover {
            background: #6bd3d2;
            color: white;
        }

        .btn-warm:focus {
            background: #6bd3d2;
            color: white;
        }

        .btn-outline-warm {
            border: 2px #6bd3d2 solid;
            color: #6bd3d2;
        }

        .btn-outline-warm:hover {
            border: 2px #6bd3d2 solid;
            background: #6bd3d2;
            color: white;
        }

        .bg-warm{
            background: #6bd3d2;
        }

        .navbar-cuscol {
            background: rgba(0, 0, 0, 0);
            padding: 20px;
        }

        .navbar-cuscol.scrolled {
            background: #fff;
        }

        .navbar-cuscol.scrolled a{
            color: #000;
        }

        .navbar-cuscol ul li a {
            color: white;
            font-weight: 500;
        }

        .navbar-cuscol ul li a:hover {
            color: #6bd3d2
        }

        .carousel .carousel-indicators button {
            width: 10px;
            height: 0;
            border-radius: 100%;
            background: rgba(255, 255, 255, 0.7);
            border-top: none;
        }

        .carousel-inner .carousel-item {
            transition: transform 1s ease;
        }

        .text-warm {
            color: #ac53ed
        }

        .sect-bg {
            background: rgba(108, 207, 210, 0.25)
        }

        .bg-thumb {
            height: 125px;
            background-image: url("https://media.istockphoto.com/id/1357365823/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=PM_optEhHBTZkuJQLlCjLz-v3zzxp-1mpNQZsdjrbns=");
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat
        }
        
        .carousel-h-fxd {
            height: 420px;
        }

        .jumbothing {
            padding-top: 100px; 
            height: 600px;
        }

        .carousel-img-w {
            width: 440px;
        }

        @media (max-width: 991px) {
            .carousel-h-fxd {
                height: 520px;
            }

            .jumbothing {
                padding-top: 100px; 
                height: 700px;
            }
        }

        @media (max-width: 470px) {
            .carousel-img-w {
               width: 300px;
            }
        }

        .mobile {
            display: none;
        }
        
        @media (max-width: 1000px) {
            .mobile {
                display: block;
            }

            .desktop {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .navbar-cuscol {
                background-color: #fff;
            }

            .navbar-cuscol a.nav-link {
                color: #000;
                margin: 0px !important;
                margin-top: 15px !important;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-cuscol fixed-top">
        <div class="container">
            <img style="width: 125px" src="{{url('/')}}/assets/logo/logo.png" alt="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse fw-bold mt-auto" id="navbarNav">
                <ul class="navbar-nav ms-auto my-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-warm w-125 my-1 mx-2" href="{{url('')}}/register">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warm w-125 my-1 mx-2" href="{{url('')}}/login">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="p-5" style="background: #daf3f4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center mt-1 mb-1">
                    Privacy Policy - Term of Use
                </div>
                <div class="col-md-6 text-center mt-1 mb-1">
                    Copyright © 2022 Pentagon
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    <script>
        $(function () {
            $(document).scroll(function () {
                var $nav = $(".navbar-cuscol");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
</body>

</html>
