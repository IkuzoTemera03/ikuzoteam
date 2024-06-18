@extends('component.navbar')

@section('css')
    <style>
        .container.w-100 {
            padding: 0px !important;
            max-width: 1800px !important;
        }

        #carouselExampleAutoplaying {
            height: auto !important;
            min-height: 300px;
        }

        .container-list-resto {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 0 auto;
        }

        .text-shadow-dark {
            text-shadow: 0px 0px 4px rgb(0, 0, 0, 0.8);
        }

        .text-shadow-light {
            text-shadow: 0px 0px 2px rgba(255, 255, 255, 0.4);
        }

        @media screen and (max-width: 470px) {
            .main-content {
                padding: 0px 5% !important;
            }
        }

        @media screen and (max-width: 590px) {
            .carousel-item a img {
                height: 300px !important;
                width: auto;
            }
        }

        @media screen and (max-width: 500px) {
            .header-explore h1 {
                font-size: calc(1.25rem + 1vw) !important;
            }
        }

        @media screen and (max-width: 767px) {
            .carousel-item .text-mobile {
                display: inline !important;
                width: 90% !important;
            }
        }

        .card {
            border-radius: 16px;
            min-width: 300px;
            width: 100%;
            max-width: 500px;
            margin: auto;
            background-color: white;
        }

        .plan {
            padding: 10px;
            background-color: #fff;
            color: #917072;

            strong {
                font-weight: 600;
                color: #754D42;
            }

            .inner {
                padding: 20px;
                padding-top: 40px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
                background-color: #a1efff;
                border-radius: 12px;
                position: relative;
                overflow: hidden;
            }

            .pricing {
                position: absolute;
                top: 0;
                right: 0;
                background-color: #48CAE4;
                border-radius: 99em 0 0 99em;
                display: flex;
                align-items: center;
                padding: .625em .75em;
                font-size: 1.25rem;
                font-weight: 600;
                color: white;
                strong {
                    font-weight: 600;
                    color: white;
                }
                small {
                    color: white;
                    font-size: .75em;
                    margin-left: .25em;
                }

            }

            .title {
                font-weight: 600;
                color: #48CAE4;
                text-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);

                &+* {
                    margin-top: .75rem;
                }
            }

            .info {
                &+* {
                    margin-top: 1rem;
                }
            }

            .features {
                display: flex;
                flex-direction: column;

                li {
                    display: flex;
                    align-items: center;
                    gap: .5rem;

                    &+* {
                        margin-top: .75rem;
                    }
                }

                .icon {
                    background-color: #48CAE4;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    color: #fff;
                    border-radius: 50%;
                    width: 20px;
                    height: 20px;

                    svg {
                        width: 14px;
                        height: 14px;
                    }
                }

                &+* {
                    margin-top: 1.25rem;
                }
            }

            button {
                font: inherit;
                border-radius: 6px;
                color: #48CAE4;
                font-weight: 500;
                font-size: 1.125rem;
                width: 100%;
                padding: 1em;
            }
        }
        .carousel-caption h5 span.text-shadow-dark{
            color: #48CAE4;
        }
        .carousel-caption h5 span.text-shadow-dark:hover{
            color: #44bad1;
        }
        .carousel-caption a.btn.btn-primary{
            background-color: #48CAE4;
        }
        .carousel-caption a.btn.btn-primary:hover{
            background-color: #44bad1;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/not-found.css') }}">
@endsection

@section('main')
    <div id="carouselExampleAutoplaying" class="carousel slide d-flex align-items-end" data-bs-ride="carousel"
        style="width: 100%; height: 600px; overflow: hidden;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <a href="https://www.kompas.com/sains/read/2020/12/18/070200023/indonesia-hasilkan-64-juta-ton-sampah-bisakah-kapasitas-pengelolaan?page=all"
                    class="text-decoration-none">
                    <img src="/images/hero-01.jpeg" class="d-block w-100" alt="Foto berita kompas.com">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><span class="fw-bold fs-2 text-shadow-dark">KOMPAS</span></h5>
                        <p class="text-light fs-4 text-shadow-dark">Indonesia Hasilkan 64 Juta Ton Sampah, Bisakah Kapasitas
                            Pengelolaan Tercapai Tahun 2025?</p>
                        <a href="https://www.kompas.com/sains/read/2020/12/18/070200023/indonesia-hasilkan-64-juta-ton-sampah-bisakah-kapasitas-pengelolaan?page=all"
                            class="btn btn-primary mb-4 fs-6 fw-bold" style="padding: 10px 20px; border-radius: 60px;">
                            <p class="font-ig text-center mb-0">KOMPAS.com</p>
                        </a>
                    </div>
                    <div class="carousel-caption d-md-block">
                        <p class="text-mobile fs-6 d-none text-light text-shadow-dark">Indonesia Hasilkan 64 Juta Ton
                            Sampah, Bisakah Kapasitas Pengelolaan Tercapai Tahun 2025?</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item active" data-bs-interval="3000">
                <a href="https://www.cnbcindonesia.com/lifestyle/20190721140139-33-86420/sebegini-parah-ternyata-masalah-sampah-plastik-di-indonesia"
                    class="text-decoration-none">
                    <img src="/images/hero-02.jpeg" class="d-block w-100" alt="Foto berita cnbcindonesia.com">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><span class="fw-bold fs-2 text-shadow-dark">CNBC Indonesia</span></h5>
                        <p class="text-light fs-4 text-shadow-dark">Sebegini Parah Ternyata Masalah Sampah Plastik di
                            Indonesia</p>
                        <a href="https://www.cnbcindonesia.com/lifestyle/20190721140139-33-86420/sebegini-parah-ternyata-masalah-sampah-plastik-di-indonesia"
                            class="btn btn-primary mb-4 fs-6 fw-bold" style="padding: 10px 20px; border-radius: 60px;">
                            <p class="font-ig text-center mb-0">cnbcindonesia.com</p>
                        </a>
                    </div>
                    <div class="carousel-caption d-md-block">
                        <p class="text-mobile fs-5 d-none text-light fs-2 text-shadow-dark">Sebegini Parah Ternyata Masalah
                            Sampah Plastik di
                            Indonesia</p>
                    </div>
                </a>
            </div>
            <div class="carousel-item active" data-bs-interval="3000">
                <a href="https://www.kompas.com/sains/read/2020/12/18/070200023/indonesia-hasilkan-64-juta-ton-sampah-bisakah-kapasitas-pengelolaan?page=all"
                    class="text-decoration-none">
                    <img src="/images/hero-03.jpeg" class="d-block w-100" alt="Foto berita kompas.com">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><span class="fw-bold fs-2 text-shadow-dark">detikNews</span></h5>
                        <p class="text-light fs-4 text-shadow-dark">Potret Lautan Sampah di Marunda Kepu</p>
                        <a href="https://www.kompas.com/sains/read/2020/12/18/070200023/indonesia-hasilkan-64-juta-ton-sampah-bisakah-kapasitas-pengelolaan?page=all"
                            class="btn btn-primary mb-4 fs-6 fw-bold" style="padding: 10px 20px; border-radius: 60px;">
                            <p class="font-ig text-center mb-0">news.detik.com</p>
                        </a>
                    </div>
                    <div class="carousel-caption d-md-block">
                        <p class="text-mobile fs-5 d-none text-light fs-2 text-shadow-dark">Potret Lautan Sampah di Marunda
                            Kepu</p>
                    </div>
                </a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="main-content ps-5 pe-5 h-100 mt-5 mb-5">
        <article class="explore" id="explore">
            <div class="header-explore">
                <h1 class="text-light text-center fs-1 text-shadow-dark mb-5">
                    <strong>
                        &mdash; {{ $page == '' || $page == 'Home' ? 'Tiket Penukaran Sampah' : $page }} &mdash;
                    </strong>
                </h1>
            </div>
            <div class="container-list-resto">
                <figure class="w-100 fg-not-found {{ count($tickets) == 0 ? '' : 'd-none' }}">
                    <div class="sad-mac d-flex justify-content-center">
                        <i class="bi bi-database-exclamation text-shadow-dark" style="font-size: 138px; color:white;"></i>
                    </div>
                    <figcaption>
                        <span class="sr-text">Data Not Found</span>
                        <div class="w-100 d-flex justify-content-center">
                            <span class="d"></span>
                            <span class="a"></span>
                            <span class="t"></span>
                            <span class="a"></span>
                        </div>
                        <div class="w-100 d-flex justify-content-center">
                            <span class="n"></span>
                            <span class="o"></span>
                            <span class="t"></span>
                            <span class="f"></span>
                            <span class="o"></span>
                            <span class="u"></span>
                            <span class="n"></span>
                            <span class="d"></span>
                        </div>
                    </figcaption>
                </figure>
                @if (count($tickets) > 0)
                    @foreach ($tickets as $t)
                        <div class="plan [ card ]">
                            <div class="inner">
                                <span class="pricing">
                                    <span>
                                        {{ $t->jenisSampah->harga }} <strong>/ {{ $t->jenisSampah->satuan_barang }}</strong>
                                    </span>
                                </span>
                                <h2 class="title fs-2">{{ $t->jenisSampah->nama }}</h2>
                                <ul class="features ps-0">
                                    <li>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M5 12h14v2H5z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <span><strong>{{ $t->jumlah }}</strong>
                                            {{ $t->jenisSampah->satuan_barang }}</span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M5 12h14v2H5z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <span>Rp. <strong>{{ $t->total_harga }}</strong></span>
                                    </li>
                                    <li>
                                        <span class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                                height="24">
                                                <path fill="none" d="M0 0h24v24H0z" />
                                                <path d="M5 12h14v2H5z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <span>
                                            {{ $t->status_sampah ? 'Telah diterima' : 'Menunggu' }} <strong>pihak
                                                ketiga</strong>
                                        </span>
                                    </li>
                                    @if ($page == '')
                                        <li>
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    width="24" height="24">
                                                    <path fill="none" d="M0 0h24v24H0z" />
                                                    <path d="M5 12h14v2H5z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <span>Dibuat Oleh <strong>{{ $t->penukar->name }}</strong></span>
                                        </li>
                                    @endif
                                </ul>
                                <div class="w-100 d-flex justify-content-end">
                                    <a href="{{ $page == '' || $page == 'Login' || $page == 'Register' ? '/login' : '/edit-ticket/'.$t->id }}" class="button btn btn-outline-dark w-50">
                                        Ubah
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            @if (count($tickets) <= 0)
                <div class="w-100 d-flex justify-content-center">
                    <a href="{{ $page == '' ? '/login' : '/add-ticket' }}"
                        class="btn btn-outline-dark fs-2 ps-4 pe-4 shadow text-shadow-light" style="border-radius: 30px;">
                        Ajukan Penukaran Sampah
                    </a>
                </div>
            @endif
        </article>
    </div>
    @if($page == '')
        @include('component.modal-first')
    @endif
    @include('component.modal-about')
    @include('component.modal-ourTeam')
@endsection

@section('script')
    <script>
        document.querySelector('input').addEventListener('input', function() {
            const cards = document.querySelectorAll('.plan');
            cards.forEach(el => {
                let status = false;

                const allParams = el.querySelectorAll(
                    '.pricing span, .title, .features li span:nth-child(2)');
                allParams.forEach(param => {
                    if (param.innerText.toLowerCase().includes(this.value.toLowerCase())) {
                        status = true;
                    }
                });

                if (status) {
                    el.style.display = 'flex';
                } else {
                    el.style.display = 'none';
                }
            });

            const count = document.querySelectorAll('.plan:not([style="display: none;"])').length;
            if (count > 0) {
                document.querySelector('.fg-not-found').classList.add('d-none');
            } else {
                document.querySelector('.fg-not-found').classList.remove('d-none');
            }
        });
        @if ($page == '')
            $(document).ready(function() {
                $('#modalFirst').modal('show');
            });
        @endif
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session()->has('success'))
        <script>
            showSweetAlert2('{{ session('success') }}', 'success');
        </script>
    @endif
    @if (session()->has('error'))
        <script>
            showSweetAlert2('{{ session('error') }}', 'error');
        </script>
    @endif
    @if ($errors->any())
        <script>
            let errInput = '<ul class="m-0 no-bullet">';
        </script>
        @foreach ($errors->all() as $error)
            <script>
                errInput += '<li>{{ $error }}</li>';
            </script>
        @endforeach
        <script>
            errInput += '</ul>';
            showSweetAlert2(errInput, 'error');
        </script>
    @endif
@endsection
