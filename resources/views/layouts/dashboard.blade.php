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
        .desktop-md {
            display: block;
        }
        @media (max-width: 550px) {
            .desktop-md {
                display: none;
            }
        }

        .bg-thumb {
            height: 125px;
            background-image: url("https://media.istockphoto.com/id/1357365823/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=PM_optEhHBTZkuJQLlCjLz-v3zzxp-1mpNQZsdjrbns=");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat
        }

        .bg-thumb-big {
            height: 250px;
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

    <!-- Start All Section Area -->
    <div class="all-section-area">
        <!-- Start Header Area -->
        <div class="header-area">
            <div class="container-fluid">
                <div class="header-content-wrapper">
                    <div class="header-content d-flex justify-content-between align-items-center">
                        <div class="header-left-content d-flex">
                            <div class="responsive-burger-menu d-block d-lg-none">
                                <span class="top-bar"></span>
                                <span class="middle-bar"></span>
                                <span class="bottom-bar"></span>
                            </div>

                            <div class="main-logo">
                                <a href="index.html">
                                    <img src="{{url('/')}}/assets/logo/logo.png" style="width: 125px" alt="main-logo">
                                </a>
                            </div>

                            <form class="search-bar d-flex">
                                <img src="{{url('/')}}/assets/images/icon/search-normal.svg" alt="search-normal">

                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            </form>

                            <div class="option-item for-mobile-devices d-block d-lg-none">
                                <i class="search-btn ri-search-line"></i>
                                <i class="close-btn ri-close-line"></i>

                                <div class="search-overlay search-popup">
                                    <div class='search-box'>
                                        <form class="search-form">
                                            <input class="search-input" name="search" placeholder="Search" type="text">

                                            <button class="search-button" type="submit">
                                                <i class="ri-search-line"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="header-right-content d-flex align-items-center">

                            <div class="header-right-option dropdown profile-nav-item pt-0 pb-0">
                                <a class="dropdown-item dropdown-toggle avatar d-flex align-items-center"
                                    href="index.html#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{url('/')}}/assets/images/avatar.png" alt="avatar">
                                    <div class="d-none d-lg-block d-md-block">
                                        <h3>{{auth()->user()->name}}</h3>
                                        <span>Super Admin</span>
                                    </div>
                                </a>

                                <div class="dropdown-menu">
                                    <div class="dropdown-header d-flex flex-column align-items-center">
                                        <div class="figure mb-3">
                                            <img src="{{url('/')}}/assets/images/avatar.png" class="rounded-circle"
                                                alt="avatar">
                                        </div>

                                        <div class="info text-center">
                                            <span class="name">{{auth()->user()->name}}</span>
                                            <p class="mb-3 email">
                                                <a
                                                    href="../../cdn-cgi/l/email-protection.htm#ed878285839e8084818a8cad8588818182c38e8280"><span
                                                        class="__cf_email__"
                                                        data-cfemail="9bf1f4f3f5e8f6f2f7fcfadbf3fef7f7f4b5f8f4f6">[email&#160;protected]</span></a>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="dropdown-wrap">
                                        <ul class="profile-nav p-0 pt-3">
                                            <li class="nav-item">
                                                <a href="profile.html" class="nav-link">
                                                    <i class="ri-user-line"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="inbox.html" class="nav-link">
                                                    <i class="ri-mail-send-line"></i>
                                                    <span>My Inbox</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="edit-profile.html" class="nav-link">
                                                    <i class="ri-edit-box-line"></i>
                                                    <span>Edit Profile</span>
                                                </a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="edit-profile.html" class="nav-link">
                                                    <i class="ri-settings-5-line"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown-footer">
                                        <ul class="profile-nav">
                                            <li class="nav-item">
                                                <form action="{{url('logout')}}" method="post">
                                                    @csrf
                                                    <button type="submit" class="nav-link">
                                                        <i class="ri-login-circle-line"></i>
                                                        <span>Logout</span>
                                                    </button></form>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Area -->

        <!-- Start Sidebar Area -->
        <nav class="side-menu-area">
            <nav class="sidebar-nav" data-simplebar>
                <ul id="sidebar-menu" class="sidebar-menu">

                    <li>
                        <a href="{{url('')}}/dashboard" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{url('/')}}/assets/images/icon/element.svg" alt="calendar">
                            </div>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{url('')}}/list-survey" class="box-style d-flex align-items-center">
                            <div class="icon">
                                <img src="{{url('/')}}/assets/images/icon/book.svg" alt="messages">
                            </div>
                            <span class="menu-title">Surveymu.</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </nav>
        <!-- End Sidebar Area -->
        <!-- Start Main Content Area -->
        <main class="main-content-wrap style-two">

            @yield('content')


            <!-- Start Footer Area -->
            <div class="footer-area w-100">
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
    @include('sweetalert::alert')
    <script src="{{url('/')}}/assets/js/sweetalert2.all.min.js"></script>
    <script>
        $(".kelas-tab-atas").on('click', function () {
            if ($(this).text().toLowerCase() == 'pertanyaan') {
                $('.change-1').removeClass('d-none')
                $('.change-2').addClass('d-none')
            } else if ($(this).text().toLowerCase() == 'jawaban') {
                $('.change-1').addClass('d-none')
                $('.change-2').removeClass('d-none')
            } else {
                $('.change-1').addClass('d-none')
                $('.change-2').addClass('d-none')
            }
        })

        $(".kelas-radio-waktu").on('click', function () {
            if ($('#atur-periode').is(':checked')) {
                $('.change-waktu-1').removeClass('d-none')
            } else if ($('#tanpa-batas').is(':checked')) {
                $('.change-waktu-1').addClass('d-none')
            }
        })

        $(".kelas-radio-jual").on('click', function () {
            if ($('#jual').is(':checked')) {
                $('.change-harga').removeClass('d-none')
            } else {
                $('.change-harga').addClass('d-none')
            }
        })

        $(document).on('click', 'select.tipe-tanya-edit', function () {
            if ($(this).val() == "Jawaban Singkat") {
                $("div.pilihan-ganda-edit").addClass('d-none')
                $("div.percentangan-edit").addClass('d-none')
                $("div.skala-edit").addClass('d-none')
            } else if ($(this).val() == "Pilihan Ganda") {
                $("div.percentangan-edit").addClass('d-none')
                $("div.pilihan-ganda-edit").removeClass('d-none')
                $("div.skala-edit").addClass('d-none')
            } else if ($(this).val() == "Kotak Centang") {
                $("div.percentangan-edit").removeClass('d-none')
                $("div.pilihan-ganda-edit").addClass('d-none')
                $("div.skala-edit").addClass('d-none')
            } else if ($(this).val() == "Skala") {
                $("div.percentangan-edit").addClass('d-none')
                $("div.pilihan-ganda-edit").addClass('d-none')
                $("div.skala-edit").removeClass('d-none')
            } else {
                $("div.pilihan-ganda-edit").addClass('d-none')
                $("div.percentangan-edit").addClass('d-none')
                $("div.skala-edit").addClass('d-none')
            }
        })

        $("select.tipe-tanya").on('click', function () {
            if ($(this).val() == "Jawaban Singkat") {
                $("div.pilihan-ganda").addClass('d-none')
                $("div.percentangan").addClass('d-none')
                $("div.skala").addClass('d-none')
            } else if ($(this).val() == "Pilihan Ganda") {
                $("div.percentangan").addClass('d-none')
                $("div.pilihan-ganda").removeClass('d-none')
                $("div.skala").addClass('d-none')
            } else if ($(this).val() == "Kotak Centang") {
                $("div.percentangan").removeClass('d-none')
                $("div.pilihan-ganda").addClass('d-none')
                $("div.skala").addClass('d-none')
            } else if ($(this).val() == "Skala") {
                $("div.percentangan").addClass('d-none')
                $("div.pilihan-ganda").addClass('d-none')
                $("div.skala").removeClass('d-none')
            } else {
                $("div.pilihan-ganda").addClass('d-none')
                $("div.percentangan").addClass('d-none')
                $("div.skala").addClass('d-none')
            }
        })

        // $('input.kustom-1').on('click' function() {
        //     if ($(this).attr('checked')) {
        //         $('#pilihan-1').val('Lainnya')
        //         console.log('work')
        //     }
        // })


        const checkboxLainnya = function () {
            const inputText = $($($(this).closest('div.card')).find('input[type=text]'));
            if (this.checked) {
                inputText.val(this.value)
            } else {
                inputText.val("")
            }
        }


        $(document).on('click', 'input.kustom-1', checkboxLainnya);


        $('#clone-tanya').on('click', function () {
            let cloneCount = $($('.pilihan-ganda div.append-here').find('div.card')).length + 1
            $('.pilihan-ganda div.append-here').append(`
                   <div class="card mb-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="pilihan-${cloneCount}" class="form-label hanya label-terdekat">Pilihan ${cloneCount}</label>
                                <input type="text"
                                class="form-control input-terdekat" name="pilihan[]" id="pilihan-${cloneCount}" aria-describedby="helpId" placeholder="Masukkan Pilihan ${cloneCount}">
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input kustom-1 input-terdekat-check" 
                                            type="checkbox"
                                          id="kustom-${cloneCount}" name="lainnya[]" value="Lainnya">
                                        <label class="form-check-label label-terdekatphp"
                                            for="kustom-${cloneCount}">
                                            Kustom Jawaban
                                        </label>
                                    </div>
                                </div>
                            </div>
                             <button type="button" class="btn btn-danger delete-card">delete</button>
                        </div>
                    </div>`)
        });

        $(document).on('click', 'button.delete-card', function () {

            let card = $(this).closest('div.card');
            card.remove();
            let parentContainer = $('.pilihan-ganda div.append-here');

            parentContainer.find('div.card').each((i, el) => {
                i++;
                $(el)
                    .find('label.label-terdekat.hanya')
                    .html(`Pilihan ${i}`)
                    .end()
                    .find('label.label-terdekat')
                    .attr('for', `pilihan-${i}`)
                    .end()
                    .find('input.input-terdekat')
                    .attr('name', `pilihan-${i}`)
                    .attr('id', `pilihan-${i}`)
                    .attr('placeholder', `Masukkan Pilihan ${i}`)
                    .end()
                    .find('label.label-terdekat-skip')
                    .attr('for', `skip-${i}`)
                    .end()
                    .find('input.input-terdekat-skip')
                    .attr('name', `skip-${i}`)
                    .attr('id', `skip-${i}`)
                    .end()
                    .find('label.label-terdekat-gambar')
                    .attr('for', `gambar-${i}`)
                    .end()
                    .find('input.input-terdekat-gambar')
                    .attr('name', `gambar-${i}`)
                    .attr('id', `gambar-${i}`)
                    .end()
                    .find('label.label-terdekat-check')
                    .attr('for', `kustom-${i}`)
                    .end()
                    .find('input.input-terdekat-check')
                    .attr('name', `kustom-${i}`)
                    .attr('id', `kustom-${i}`);
            });

        });

        // $('#clone-tanya-centang').on('click', function() {
        //       let cloneCount = $($('.percentangan div.append-here').find('div.card')).length + 1
        //         $('.percentangan div.append-here').append(`
        //            <div class="card mb-3">
        //                 <div class="card-body">
        //                     <div class="mb-3">
        //                         <label for="pilihan-centang-${cloneCount}" class="form-label hanya label-terdekat">Pilihan ${cloneCount}</label>
        //                         <input type="text"
        //                         class="form-control input-terdekat" name="pilihan_centang[]" id="pilihan-centang-${cloneCount}" aria-describedby="helpId" placeholder="Masukkan Pilihan ${cloneCount}">
        //                     </div>
        //                     <div class="row mb-3">

        //                         <div class="col-6">
        //                             <div class="form-check">
        //                                 <input
        //                                     class="form-check-input kustom-1 input-terdekat-check"
        //                                     type="checkbox" 
        //                                     id="kustom-centang-${cloneCount}"
        //                                     name="lainnya_centang[]"
        //                                     value="Lainnya">
        //                                 <label class="form-check-label label-terdekat"
        //                                     for="kustom-centang-${cloneCount}">
        //                                     Kustom Jawaban
        //                                 </label>
        //                             </div>
        //                         </div>

        //                     </div>
        //                      <button type="button" class="btn btn-danger delete-centang-card">delete</button>
        //                 </div>
        //             </div>`
        //         )
        // });

        // $(document).on('click','button.delete-centang-card',function(){

        //     let card = $(this).closest('div.card');
        //     card.remove();
        //     let parentContainer = $('.percentangan div.append-here');

        //     parentContainer.find('div.card').each((i,el)=>{
        //         i++;
        //         $(el)
        //         .find('label.label-terdekat.hanya')
        //         .html(`Pilihan ${i}`)
        //         .end()
        //         .find('label.label-terdekat')
        //         .attr('for', `pilihan-centang-${i}`)
        //         .end()
        //         .find('input.input-terdekat')
        //         .attr('id', `pilihan-centang-${i}`)
        //         .attr('placeholder', `Masukkan Pilihan ${i}`)
        //         .end()
        //         .find('label.label-terdekat-skip')
        //         .attr('for', `skip-centang-${i}`)
        //         .end()
        //         .find('input.input-terdekat-skip')
        //         .attr('id', `skip-centang-${i}`)
        //         .end()
        //         .find('label.label-terdekat-check')
        //         .attr('for', `kustom-centang-${i}`)
        //         .end()
        //         .find('input.input-terdekat-check')
        //         .attr('id', `kustom-centang-${i}`);
        //     });

        // });

        $(document).on('click', '#clone-tanya-edit', function () {
            let cloneCount = $($('.pilihan-ganda-edit div.append-here').find('div.card')).length + 1
            $('.pilihan-ganda-edit div.append-here').append(`
                   <div class="card mb-3">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="pilihan-${cloneCount}" class="form-label hanya label-terdekat">Pilihan ${cloneCount}</label>
                                <input type="text"
                                class="form-control input-terdekat" name="pilihan[]" id="pilihan-${cloneCount}" aria-describedby="helpId" placeholder="Masukkan Pilihan ${cloneCount}">
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input kustom-1 input-terdekat-check" 
                                            type="checkbox"
                                          id="kustom-${cloneCount}" name="lainnya[]" value="Lainnya">
                                        <label class="form-check-label label-terdekatphp"
                                            for="kustom-${cloneCount}">
                                            Kustom Jawaban
                                        </label>
                                    </div>
                                </div>
                            </div>
                             <button type="button" class="btn btn-danger delete-card-edit">delete</button>
                        </div>
                    </div>`)
        });

        $(document).on('click', 'button.delete-card-edit', function () {

            let card = $(this).closest('div.card');
            card.remove();
            let parentContainer = $('.pilihan-ganda-edit div.append-here');

            parentContainer.find('div.card').each((i, el) => {
                i++;
                $(el)
                    .find('label.label-terdekat.hanya')
                    .html(`Pilihan ${i}`)
                    .end()
                    .find('label.label-terdekat')
                    .attr('for', `pilihan-${i}`)
                    .end()
                    .find('input.input-terdekat')
                    .attr('id', `pilihan-${i}`)
                    .attr('placeholder', `Masukkan Pilihan ${i}`)
                    .end()
                    .find('label.label-terdekat-skip')
                    .attr('for', `skip-${i}`)
                    .end()
                    .find('input.input-terdekat-skip')
                    .attr('id', `skip-${i}`)
                    .end()
                    .find('label.label-terdekat-check')
                    .attr('for', `kustom-${i}`)
                    .end()
                    .find('input.input-terdekat-check')
                    .attr('id', `kustom-${i}`);
            });

        });

        

        $('div.edit-tanya').click(function () {
            const dataType = $(this).data('type');
            const dataTypeClass = $(this).data('type-class');
            $('#editTanya select').val(dataType).append(
                `<option value="${dataType}" selected>${dataType}</option>`);
            $(`.adhd`).addClass('d-none');
            $(`.${dataTypeClass}`).removeClass('d-none');
        });
        $(document).find('a.number').on('click', function () {
            if ($(this).text() == "1") {
                $('tr.1st-page').removeClass('d-none')
                $('tr.2nd-page').addClass('d-none')
            } else if ($(this).text() == "2") {
                $('tr.1st-page').addClass('d-none')
                $('tr.2nd-page').removeClass('d-none')
            }
        })

    </script>



    {{-- CRUD ADITYA --}}
    <script>
        $('div.edit-tanya').on('click', function () {
            let id = $(this).data('id');
            $.ajax({
                url: '{{url("/")}}/ajax/get_edit',
                type: "GET",
                data: {
                    id
                },
                success: function (response) {
                    if (response) {
                        $('#content-editTanya').html(response);
                    }
                }
            });
        });

    </script>

    <script>
        $('div.edit-tanya-pilihan-ganda').on('click', function () {
            let id = $(this).data('id');
            $.ajax({
                url: '{{url("/")}}/ajax/get_edit_pilhan_ganda',
                type: "GET",
                data: {
                    id
                },
                success: function (response) {
                    if (response) {
                        $('#content-editTanya-ganda').html(response);
                    }
                }
            });
        });

    </script>


    <script>
        $(document).on('click', 'button.btn-delete', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let url = '{{url("/")}}/delete/short_question/' + id;
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Ingin menghapus item ini",
                // icon: 'warning',  
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.value) {
                    // Send DELETE request to server
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function (data) {
                            // Show success message and reload page
                            Swal.fire(
                                'Terhapus!',
                                'Item Berhasil Di Hapus.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        },
                        error: function (data) {
                            // Show error message
                            Swal.fire(
                                'Error!',
                                'There was an error deleting your item.',
                                'error'
                            );
                        }
                    });
                }
            });
        });

    </script>

    <script>
        $(document).on('click', 'button.btn-delete-multiple-question', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let url = '{{url("/")}}/delete/multiple_question/' + id;
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Ingin menghapus item ini",
                // icon: 'warning',  
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
                if (result.value) {
                    // Send DELETE request to server
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function (data) {
                            // Show success message and reload page
                            Swal.fire(
                                'Terhapus!',
                                'Item Berhasil Di Hapus.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        },
                        error: function (data) {
                            // Show error message
                            Swal.fire(
                                'Error!',
                                'There was an error deleting your item.',
                                'error'
                            );
                        }
                    });
                }
            });
        });

    </script>


    <script>
        $('button.btn-delete-survei').on('click', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            let url = '{{url("/")}}/delete/survei/' + id;
            Swal.fire({
                title: 'Yakin Ingin Menghapus Survey Ini?',
                text: "Jika sudah terhapus, kamu tidak dapat melihat survey ini lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    // Send DELETE request to server
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function (data) {
                            // Show success message and reload page
                            Swal.fire(
                                'Deleted!',
                                'Your item has been deleted.',
                                'success'
                            ).then(() => {
                                window.location =
                                '{{url("/")}}/dashboard'; // Redirect to '/items' page
                            });
                        },
                        error: function (data) {
                            // Show error message
                            Swal.fire(
                                'Error!',
                                'There was an error deleting your item.',
                                'error'
                            );
                        }
                    });
                }
            });
        });

    </script>

    <script>
        $(document).on('click', 'button.btn-close-alert', function () {
            Swal.fire({
                title: 'Apakah anda Yakin??',
                text: "Sistem Tidak Akan Menyimpan Perubahan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
            })
        });

    </script>
</body>

</html>
