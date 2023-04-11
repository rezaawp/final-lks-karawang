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
                <h3 class="fw-bold text-center">Panduan untuk mendaftar akun</h3>
                <small>
                    <p align="center">Silahkan anda menhubungin admin yang ada dibawah ini :</p>

                    <ol>
                        @foreach ($admins as $admin)
                            <li>{{ $admin['name'] }}</li>
                        @endforeach
                    </ol>

                    <p>Jika sudah menghubungi admin yang ada diatas, silahkan anda kembali ke halaman login untuk masuk
                    </p>
                </small>
            </div>

            <div class="card-body d-flex justify-content-center">
                <a href="login" class="btn btn-primary btn-sm">Login</a>
            </div>
        </div>
    </div>
    @include('assets.js')
</body>

</html>
