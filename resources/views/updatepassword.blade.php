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
        @error('wrongPassword')
            <div class="alert alert-danger" style="width: 25rem">
                {{ $message }}
            </div>
        @enderror
        <div class="card" style="width: 25rem">
            <div class="card-header">
                <h3 class="fw-bold text-center">Ubah Password</h3>
                <small>
                    <p align="center">Anda masih menggunakan password default. Silahkan ubah password anda disini</p>
                </small>
            </div>

            <div class="card-body">
                <form action="{{ route('auth.password.update') }}" method="post">
                    @csrf
                    @method('post')
                    <label for="old_password" style="width: 100%">
                        Password Lama :
                        <input type="password" value="{{ old('old_password') }}" name="old_password" id="old_password"
                            class="@error('old_password')
                        {{ 'is-invalid' }}
                        @enderror form-control">
                        @error('old_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="new_password" style="width: 100%">
                        Password Baru :
                        <input type="password" name="new_password" id="new_password"
                            class="@error('new_password')
                        {{ 'is-invalid' }}
                        @enderror form-control">
                        @error('new_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="confirmation_password" style="width: 100%">
                        Password Baru :
                        <input type="password" name="confirmation_password" id="confirmation_password"
                            class="@error('confirmation_password')
                        {{ 'is-invalid' }}
                        @enderror form-control">
                        @error('confirmation_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>
                    <div class="d-flex justify-content-center mt-3 flex-column">
                        <small>
                            <p align="center">Jika anda ingin mendaftarkan akun ke admin, silahkan klik <a
                                    href="/izi" class="text-decoration-none">disini</a></p>
                        </small>
                        <button class="btn btn-primary">Login</button> <br>
                    </div>
                </form>
                <form action="{{ route('logout') }}" method="post" style="width: 100%">
                    @csrf
                    @method('post')
                    <button class="btn btn-danger" style="width: 100%">Logout</button>
                </form>
            </div>
        </div>
    </div>
    @include('assets.js')
</body>

</html>
