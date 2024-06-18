<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="dicoding:email" content="C624-PS079@dicoding.org">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset("/images/ikuzo logo.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @yield('css')

    <style>
        * {
            font-family: "Roboto", sans-serif;
        }

        body {
            background: url(/images/bg.jpg) no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .navbar .container-fluid .collapse.show {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .navbar .container-fluid .collapse.show .nav-item.d-flex {
            margin-left: 0px !important;
        }

        .navbar {
            position: fixed;
            z-index: 10;
        }

        .font-ikuzo {
            background: -webkit-linear-gradient(#6dd1ff, #ff41d0) !important;
            -webkit-background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
        }

        .nav-link {
            color: white !important;
            font-size: calc(1.275rem + .2vw) !important;
        }

        .site-footer {
            background-color: #26272b;
            padding: 45px 0 20px;
            font-size: 15px;
            line-height: 24px;
            color: #737373;
            width: 100%
        }

        .footer-links,
        .social-icons {
            padding-left: 0;
            list-style: none
        }

        .container {
            max-width: 1500px !important;
            width: 90%;
        }

        .site-footer hr {
            border-top-color: #bbb;
            opacity: .5
        }

        .site-footer hr.small {
            margin: 20px 0
        }

        .site-footer h6 {
            color: #fff;
            font-size: 16px;
            text-transform: uppercase;
            margin-top: 5px;
            letter-spacing: 2px
        }

        .text-justify {
            text-align: justify;
        }

        .h6-link:hover {
            color: #ff6e00;
        }

        .footer-links a,
        .site-footer a {
            cursor: pointer;
            text-decoration: none;
            color: #737373
        }

        .footer-links a:active,
        .footer-links a:focus,
        .footer-links a:hover,
        .site-footer a:hover {
            color: #36c;
            text-decoration: none
        }

        .footer-links li {
            display: block
        }

        .footer-links.inline li,
        .social-icons a,
        .social-icons li {
            display: inline-block
        }

        .site-footer .social-icons {
            text-align: right
        }

        .site-footer .social-icons a {
            width: 40px;
            height: 40px;
            line-height: 40px;
            margin-left: 6px;
            margin-right: 0;
            border-radius: 100%;
            background-color: #33353d
        }

        @media (max-width:991px) {
            .site-footer [class^=col-] {
                margin-bottom: 30px
            }
        }

        .social-icons {
            margin-bottom: 0
        }

        .social-icons li {
            margin-bottom: 4px
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }

        .social-icons a {
            background-color: #eceeef;
            color: #818a91;
            font-size: 16px;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: .2s linear;
            -o-transition: .2s linear;
            transition: .2s linear
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }

        .social-icons a.github:hover {
            background-color: white;
            color: #1f2328
        }

        .social-icons a.twitter:hover {
            background-color: #00aced
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }

        .social-icons a.instagram:hover {
            background-color: #ea4c89
        }

        @media (max-width:767px) {
            .site-footer {
                padding-bottom: 0
            }

            .site-footer .copyright-text,
            .site-footer .social-icons {
                text-align: center
            }

            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }

        .row-footer {
            display: flex;
            justify-content: space-between;
        }

        .footer-detail {
            width: 45%;
            display: flex;
        }

        @media (max-width:767px) {
            .row-footer {
                flex-direction: column;
            }

            .footer-detail {
                width: 100%;
            }
        }

        .profile-teams {
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 90%;
            margin: 0 auto;
        }

        .profile ul.dropdown-menu {
            margin-left: -80px;
        }

        .form-control[type="search"] {
            background-color: #9ceeff;
            border-color: #48CAE4;
            color: rgb(155, 155, 155);
        }
        .form-control[type="search"]::placeholder{
            color: rgb(155, 155, 155);
        }

        @media (max-width:991px) {
            .profile ul.dropdown-menu {
                margin-left: 0px;
            }

            form[role="search"] {
                margin-right: 0px !important;
            }

            .profile.dropdown .dropdown-toggle span {
                display: inline !important;
            }

            .profile.dropdown .dropdown-toggle i {
                display: none !important;
            }

            .profile ul.dropdown-menu {
                margin-left: 0px;
            }

            form[role="search"] {
                margin-left: 0px !important;
            }

            .navbar-nav.w-100 {
                gap: 10px;
            }

            .navbar .container-fluid .collapse.show {
                margin-top: 1.5rem !important;
                margin-bottom: 1rem !important;
            }
        }

        .nav-item.active {
            background: #1bb5d4;
            box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.3);
            border-radius: 20px;
        }

        .modal.fade.show {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .nav-item:hover {
            background-color: #44bad1 !important;
            border-radius: 20px;
        }
        .dropdown-menu{
            background-color: #1993ac;
        }
        .dropdown-menu a.text-dark,
        .dropdown-menu .dropdown-item{
            color: white!important;
        }
        .dropdown-item:hover{
            background-color: #24daff;
        }
    </style>
    <title>Ikuzo {{ $page != '' ? '| ' . $page : '' }}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg ps-4 pe-4 pb-2 pt-2 w-100" style="background-color: #48CAE4">
        <div class="container-fluid">
            <a class="navbar-brand nav__item logo">
                <img src="{{ asset("/images/ikuzo logo.png") }}" alt="Logo Ikuzo" style="width: 120px;">
            </a>
            <button class="navbar-toggler {{ $page == 'Login' || $page == 'Register' ? 'd-none' : '' }}" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul
                    class="navbar-nav w-100 me-auto mb-lg-0 d-flex justify-content-end text-light {{ $page == 'Login' || $page == 'Register' ? 'd-none' : '' }}">
                    @if ($page != 'Pengajuan Sampah')
                        <form class="d-flex align-items-center" role="search" style="margin-right: 30px;">
                            <input class="form-control" style="height: 45px; min-width: 250px;" type="search"
                                placeholder="Search tickets" aria-label="Search">
                        </form>
                    @endif
                    <li class="nav-item {{ $page == '' || $page == 'Home' ? 'active' : '' }} ps-3 pe-3">
                        <a class="nav-link"
                            href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/home' }}"
                            aria-label="service">Home</a>
                    </li>
                    <li class="nav-item {{ $page == 'Pengajuan' ? 'active' : '' }} ps-3 pe-3">
                        <a class="nav-link"
                            href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/add-ticket' }}"
                            aria-label="service">Pengajuan</a>
                    </li>

                    <li
                        class="nav-item {{ $page == 'Riwayat Tiket Tertunda' || $page == 'Riwayat Tiket Diterima' ? 'active' : '' }} ps-3 pe-3 dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            History
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item mt-2 mb-2"
                                    href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/pending' }}">
                                    Menunggu
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item mt-2 mb-2"
                                    href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/accept' }}">
                                    Diterima
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item ps-3 pe-3 dropdown profile">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <span class="pb-0 mb-0 d-none">
                                {{ $page == '' || $page == 'Login' || $page == 'Register' ? 'Anda Belum Login' : auth()->user()->name }}
                            </span>
                            <i class="bi bi-person-circle fs-5"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @if ($page != '')
                                <form class="d-flex align-items-center" action="/logout" method="POST">
                                    @csrf
                                    <li class="w-100">
                                        <button type="submit" class="dropdown-item d-flex align-items-center gap-3"
                                            aria-label="login">
                                            <i class="bi bi-box-arrow-left fs-4"></i>
                                            Log Out
                                        </button>
                                    </li>
                                </form>
                            @else
                                <li>
                                    <a class="dropdown-item d-flex align-items-center gap-3" href="/login"
                                        aria-label="login">
                                        <i class="bi bi-box-arrow-right fs-4"></i>
                                        Log In
                                    </a>
                                </li>
                            @endif
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                    style="cursor: pointer">
                                    <i class="bi bi-question-circle fs-4"></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="mb-2 mt-2">
                                <a class="ms-3 text-decoration-none text-dark" data-bs-toggle="tooltip"
                                    data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                    data-bs-title="Saldo penukaran sampah.">
                                    Rp.
                                    <strong>{{ $page == '' || $page == 'Login' || $page == 'Register' ? '-' : auth()->user()->saldo }}</strong>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container w-100 ps-5 pe-5" style="min-height: calc(100vh - 58.3px)!important">
        @yield('main')
    </div>
    @include('component.modal-about')
    @include('component.modal-ourTeam')
    @include('component.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @yield('script')
</body>

</html>
