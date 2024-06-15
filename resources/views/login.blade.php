@extends('component.navbar')

@section('css')
    <link rel="stylesheet" type="text/css" href="/css/login-main.css">
    <link rel="stylesheet" type="text/css" href="/css/login-util.css">
    <style>
        .container {
            display: flex;
            align-items: center;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid #5b5b5b;
            border-radius: 40px;
            font-size: 16px;
            color: #5b5b5b;
            padding: 20px 45px 20px 20px;
        }
    </style>
@endsection

@section('main')
    <div class="limiter d-flex alignt-items-center justify-content-center pt-5 pb-5">
        <div class="wrap-login100 shadow rounded" style="margin: auto">
            <form class="login100-form validate-form p-5" action="/login" method="POST">
                @csrf
                <span class="login100-form-title p-b-49 fw-bold font-ikuzo">
                    Log In
                </span>

                <div class="wrap-input100 validate-input" data-validate="Email is reauired">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" placeholder="Type your email" required>
                </div>

                <div class="wrap-input100 validate-input mt-4" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" placeholder="Type your password" required>
                </div>

                <div class="container-login100-form-btn mt-5">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Masuk
                        </button>
                    </div>
                </div>
                <div class="p-t-8 d-flex justify-content-center">
                    <a href="/register" class="text-light text-decoration-none fs-5">
                        Belum punya akun? <span class="text-primary">Daftar!</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
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
