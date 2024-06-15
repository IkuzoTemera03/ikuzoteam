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
        select.input100{
            margin-left: 0px!important;
            border-radius: 10px;
        }
        select.input100:focus{
            background-color: #48CAE4;
        }
        .select-wrap100{
            border-bottom: 0px;
        }
    </style>
@endsection

@section('main')
    <div class="limiter d-flex alignt-items-center justify-content-center pt-5 pb-5">
        <div class="wrap-login100 shadow rounded" style="margin: auto">
            <form class="login100-form validate-form p-5" action="/add-ticket" method="POST">
                @csrf
                <span class="login100-form-title p-b-49 fw-bold font-ikuzo">
                    Pengajuan Sampah
                </span>

                <div class="wrap-input100 validate-input select-wrap100" data-validate="Email is reauired">
                    <span class="label-input100">Jenis Sampah</span>
                    <select class="input100 mt-2" name="jenis_sampah"required>
                        <option value="">Pilih jenis sampah</option>
                        @foreach ($jenis as $j)
                            <option value="{{ $j->id }}">{{ $j->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="wrap-input100 validate-input mt-4" data-validate="Password is required">
                    <span class="label-input100">Jumlah Barang</span>
                    <input class="input100" type="number" name="jumlah" placeholder="Masukkan jumlah barang" required>
                </div>

                <div class="wrap-input100 validate-input mt-4" data-validate="Password is required">
                    <span class="label-input100">Alamat</span>
                    <input class="input100" type="text" name="alamat" placeholder="Masukkan alamat anda" required>
                </div>

                <div class="container-login100-form-btn mt-5">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button type="submit" class="login100-form-btn">
                            Ajukan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
@endsection
