<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link Of CSS -->
    <link rel="stylesheet" href="{{url('/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/remixicon.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/iconsax.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/metismenu.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/simplebar.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/calendar.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/sweetalert2.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/jbox.all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/editor.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/loaders.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/header.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/footer.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">

    <style>
        .bg-thumb {
            height: 125px;
            background-image: url("https://media.istockphoto.com/id/1357365823/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=PM_optEhHBTZkuJQLlCjLz-v3zzxp-1mpNQZsdjrbns=");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .bg-thumb-big {
            height: 195px;
            background-image: url("https://media.istockphoto.com/id/1357365823/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=PM_optEhHBTZkuJQLlCjLz-v3zzxp-1mpNQZsdjrbns=");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .nav-link.custom {
            color: black;
        }

        .nav-link.custom.active {
            background: #fff;
            border-left: 3px solid #0d6efd;
            border-radius: 0px;
            color: #0d6efd;
        }

        .col-12.cus-hov:hover {
            border: 1px solid #bbbbbb !important;
            cursor: pointer;
        }

        .input-text-check {
            border: 0px;
            border-bottom: 1px solid black
        }

        input:focus {
            outline: none;
            border-bottom: 1px solid #0b5ed7;
        }

        .uploadOuter {
            text-align: center;
            padding: 20px;

        }

        strong {
            padding: 0 10px
        }

        .dragBox {
            width: 250px;
            height: 100px;
            margin: 0 auto;
            position: relative;
            text-align: center;
            font-weight: bold;
            line-height: 95px;
            color: #999;
            border: 2px dashed #ccc;
            display: inline-block;
            transition: transform 0.3s;

        }

        input[type="file"] {
            position: absolute;
            height: 100%;
            width: 100%;
            opacity: 0;
            top: 0;
            left: 0;
        }

        .draging {
            transform: scale(1.1);
        }

        #preview {
            text-align: center;

        }

        img {
            max-width: 100%
        }

    </style>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{url('/')}}/assets/images/favicon.svg">
    <!-- Title -->
    <title>Indosurvei</title>
</head>

<body class="body-bg-f8faff">
    <!-- Start Preloader Area -->
    <div class="preloader">
        <img src="{{url('/')}}/assets/logo/logo.png" alt="main-logo">
    </div>
    <!-- End Preloader Area -->

    <!-- Start Main Content Area -->
    <main class="container mt-5">

        @yield('content')

        <!-- Start Footer Area -->
        <div class="footer-area">
            <div class="container-fluid">
                <div class="footer-content">
                    <p>Copyright © 2022 <a target="_blank">Pentagon</a></p>
                </div>
            </div>
        </div>
        <!-- End Footer Area -->

    </main>
    <!-- End Main Content Area -->

    </div>
    <!-- End All Section Area -->

    <!-- Start Template Sidebar Area -->
    <div class="template-sidebar-area">
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
            <div class="offcanvas-header">
                <a href="index.html">
                    <img src="{{url('/')}}/assets/images/main-logo.svg" alt="main-logo">
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul>
                    <li>
                        <a class="default-btn btn active" target="_blank" href="index.html#">
                            Buy Now
                        </a>
                    </li>
                    <li>
                        <a class="default-btn btn" target="_blank"
                            href="https://themeforest.net/user/envytheme/portfolio">
                            Our Portfolio
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Template Sidebar Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-fill"></i>
        <i class="ri-arrow-up-s-fill"></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Min JS -->
    <script data-cfasync="false"
        src="{{url('/')}}/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{url('/')}}/assets/js/jquery.min.js"></script>
    <script src="{{url('/')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('/')}}/assets/js/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/assets/js/metismenu.min.js"></script>
    <script src="{{url('/')}}/assets/js/simplebar.min.js"></script>
    <script src="{{url('/')}}/assets/js/apexcharts/website-analytics.js"></script>
    <script src="{{url('/')}}/assets/js/geticons.js"></script>
    <script src="{{url('/')}}/assets/js/calendar.js"></script>
    <script src="{{url('/')}}/assets/js/editor.js"></script>
    <script src="{{url('/')}}/assets/js/form-validator.min.js"></script>
    <script src="{{url('/')}}/assets/js/contact-form-script.js"></script>
    <script src="{{url('/')}}/assets/js/ajaxchimp.min.js"></script>
    <script src="{{url('/')}}/assets/js/custom.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="{{url('/')}}/assets/js/sweetalert2.all.min.js"></script>

    <script>

        

        $('.ambil-survey').on('click', function () {
            $('.judul-thumb').removeClass('d-none');
            $('.next-to-q').removeClass('d-none');
            $('.first-page').addClass('d-none');
            $('.ambil-survey').addClass('d-none');
            $('.judul-thumb').removeClass('d-none');
            $('.question-1').show("100")
        })

        $('.next-to-q').on('click', function () {
            // $('.next-to-q2').addClass('d-none');
            // $('.question-1').addClass('d-none');
            // $('.question-2').removeClass('d-none');
            // $('.next-to-q3').removeClass('d-none');
            // $('.back-to-q1').removeClass('d-none');

            $('div.active').hide('100',function(){
                let active = $(this);
                let index = active.data('index');
               
                    active.removeClass('active');
                    // let question = active.attr('class').split(' ')[0];
                    $(`.question-${index +1}`).show('100',function(){
                        $(`.question-${index +1}`).addClass('active');

                        setTimeout(() => {
                            if($(`.question-${index +1}.active`)){
                                $('.back-to-q').removeClass('d-none').show()
                            }
                            if($('.survey').length == parseInt($(`.question-${index +1}`).data('index'))){
                                $('.next-to-q').hide();
                                $('button.submit').removeClass('d-none').show()
                            }
                        }, 200);
                


                    });
                  
                
            });

        })

        $('.back-to-q').on('click', function () {
                let active = $('div.active');
                let index = active.data('index');
                $('.next-to-q').show() 
                $('button.submit').addClass('d-none')  

                active.hide('100')
                active.removeClass('active');
                // let question = active.attr('class').split(' ')[0];
                $(`.question-${index - 1}`).show('100');
                $(`.question-${index - 1}`).addClass('active');

                setTimeout(() => {
                if($(`.question-1.active`).length == 1){
                    $('.back-to-q').hide()
                }
               }, 200);
                

                
        })
        
        // $('.next-to-q3').on('click', function () {
        //     $('.next-to-q3').addClass('d-none');
        //     $('.question-2').addClass('d-none');
        //     $('.back-to-q1').addClass('d-none');
        //     $('.question-3').removeClass('d-none');
        //     $('.next-to-q4').removeClass('d-none');
        //     $('.back-to-q2').removeClass('d-none');
        // })

        // $('.back-to-q2').on('click', function () {
        //     $('.next-to-q3').removeClass('d-none');
        //     $('.question-2').removeClass('d-none');
        //     $('.back-to-q1').removeClass('d-none');
        //     $('.question-3').addClass('d-none');
        //     $('.next-to-q4').addClass('d-none');
        //     $('.back-to-q2').addClass('d-none');
        // })

        // $('.next-to-q4').on('click', function () {
        //     $('.next-to-q4').addClass('d-none');
        //     $('.question-3').addClass('d-none');
        //     $('.back-to-q2').addClass('d-none');
        //     $('.question-4').removeClass('d-none');
        //     $('.next-to-q5').removeClass('d-none');
        //     $('.back-to-q3').removeClass('d-none');
        // })

        // $('.back-to-q3').on('click', function () {
        //     $('.next-to-q4').removeClass('d-none');
        //     $('.question-3').removeClass('d-none');
        //     $('.back-to-q2').removeClass('d-none');
        //     $('.question-4').addClass('d-none');
        //     $('.next-to-q5').addClass('d-none');
        //     $('.back-to-q3').addClass('d-none');
        // })

        // $('.next-to-q5').on('click', function () {
        //     $('.next-to-q5').addClass('d-none');
        //     $('.question-4').addClass('d-none');
        //     $('.back-to-q3').addClass('d-none');
        //     $('.question-5').removeClass('d-none');
        //     $('.submit').removeClass('d-none');
        //     $('.back-to-q4').removeClass('d-none');
        // })

        // $('.back-to-q4').on('click', function () {
        //     $('.next-to-q5').removeClass('d-none');
        //     $('.question-4').removeClass('d-none');
        //     $('.back-to-q3').removeClass('d-none');
        //     $('.question-5').addClass('d-none');
        //     $('.submit').addClass('d-none');
        //     $('.back-to-q4').addClass('d-none');
        // })

        "use strict";

        function dragNdrop(event) {
            var fileName = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("preview");
            var previewImg = document.createElement("img");
            previewImg.setAttribute("src", fileName);
            preview.innerHTML = "";
            preview.appendChild(previewImg);
        }

        function drag() {
            document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
        }

        function drop() {
            document.getElementById('uploadFile').parentNode.className = 'dragBox';
        }

        $('.submit').on('click', function() {
            Swal.fire(
  'Berhasil!',
  'Data Anda berhasil dikirim',
  'success'
)
        })
    </script>

</body>

</html>
