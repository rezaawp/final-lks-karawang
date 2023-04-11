<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    @include('assets.css')
</head>

<body>
    <div style="height: 100vh" class="container d-flex flex-column justify-content-center align-items-center">
        @error('loginFailed')
            <div class="alert alert-danger" style="width: 25rem">
                {{ $message }}
            </div>
        @enderror
        @if (session('passwordChange'))
            <div class="alert alert-success" style="width: 25rem">
                {{ session('passwordChange') }}
            </div>
        @endif
        <div class="card" style="width: 25rem">
            <div class="card-header">
                <h3 class="fw-bold text-center">Login Polling Kantor</h3>
                <small>
                    <p align="center">Silahkan login menggunakan username dan password yang telah diberikan oleh
                        admin</p>
                </small>
            </div>

            <div class="card-body">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    @method('post')
                    <label for="username" style="width: 100%">
                        Username :
                        <input type="text" value="{{ old('username') }}" name="username" id="username"
                            class="@error('username')
                        {{ 'is-invalid' }}
                        @enderror form-control">
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="password" style="width: 100%">
                        Password :
                        <input type="password" name="password" id="password"
                            class="@error('password')
                        {{ 'is-invalid' }}
                        @enderror form-control">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <div class="d-flex justify-content-center mt-3 flex-column">
                        <small>
                            <p align="center">Jika anda ingin mendaftarkan akun ke admin, silahkan klik <a
                                    href="{{ route('auth.panduan') }}" class="text-decoration-none">disini</a></p>
                        </small>
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('assets.js')
</body>

</html>
