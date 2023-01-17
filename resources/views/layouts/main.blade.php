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
            background: #ECA869;
            color: white;
        }

        .btn-warm:hover {
            background: #b98352;
            color: white;
        }

        .btn-warm:focus {
            background: #ECA869;
            color: white;
        }

        .btn-outline-warm {
            border: 2px #ECA869 solid;
            color: #ECA869;
        }

        .btn-outline-warm:hover {
            border: 2px #ECA869 solid;
            background: #b98352;
            color: white;
        }

        .bg-warm{
            background: #ECA869;
        }

        .navbar-cuscol {
            background: #000;
        }

        .navbar-cuscol ul li a {
            color: white
        }

        .carousel .carousel-indicators button {
            width: 10px;
            height: 0;
            border-radius: 100%;
            background: rgba(0, 0, 0, 0.7);
            border-top: none;
        }

        .text-warm {
            color: #eca869
        }

        .sect-bg {
            background: hsla(46, 32%, 62%, 0.35)
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
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Feature</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Survey Example</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warm w-125 mx-2" href="#">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-warm w-125 mx-2" href="#">LOGIN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="p-5" style="background: #bcaf7e">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    Copyright © 2022 Pentagon
                </div>
                <div class="col-6 text-end">
                    Privacy Policy - Term of Use
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
