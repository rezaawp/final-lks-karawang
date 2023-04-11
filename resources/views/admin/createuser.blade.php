@extends('layout.layoutadmin')

@section('title')
    Pollings
@endsection

@section('content')
    <div style="height: 90vh" class="container d-flex flex-column justify-content-center align-items-center">

        @error('stored')
            <div class="alert alert-success" style="width: 30rem">
                {{ $message }}
            </div>
        @enderror

        <div class="card" style="width: 30rem">
            <div class="card-header">
                <h3 class="fw-bold text-center">Daftarkan User</h3>
                <small>
                    <p align="center">Silahkan daftarkan user di bawah ini</p>
                </small>
            </div>

            <div class="card-body">
                <form action="{{ route('user.store') }}" method="post">
                    @csrf
                    @method('post')
                    <label for="nama_lengkap" style="width: 100%" class="form-label">
                        Nama Lengkap :
                        <input type="text" value="{{ old('nama_lengkap') }}" name="nama_lengkap" id="nama_lengkap"
                            class="@error('nama_lengkap')
                    {{ 'is-invalid' }}
                    @enderror form-control">
                        @error('nama_lengkap')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="username" style="width: 100%" class="form-label">
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

                    <label for="" style="width: 100%" class="form-label">Divisi :
                        <select
                            class="form-select form-select @error('divisi')
                    {{ 'is-invalid' }}
                    @enderror"
                            name="divisi" id="">
                            @foreach ($divisions as $divisi)
                                <option value="{{ $divisi['id'] }}">{{ $divisi['name'] }}</option>
                            @endforeach
                        </select>
                        @error('divisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="password" style="width: 100%" class="form-label">
                        Password :
                        <input type="password" value="{{ old('password') }}" name="password" id="password"
                            class="@error('password')
                    {{ 'is-invalid' }}
                    @enderror form-control">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>


                    <label for="konfirmasi_password" style="width: 100%" class="form-label">
                        Konfirmasi Password :
                        <input value="{{ old('konfirmasi_password') }}" type="password" name="konfirmasi_password"
                            id="konfirmasi_password"
                            class="@error('konfirmasi_password')
                    {{ 'is-invalid' }}
                    @enderror form-control">
                        @error('konfirmasi_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <div class="d-flex justify-content-center mt-3 flex-column">
                        <button class="btn btn-primary">Daftarkan User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        const addInput = document.getElementById("add-input");
        const inputs = document.getElementById("choises-content");

        addInput.addEventListener("click", () => {
            const newElement = document.createElement("input");
            newElement.name = "choises[]";
            newElement.classList.add('form-control')
            newElement.classList.add('mt-3')
            newElement.type = "text";

            inputs.appendChild(newElement);
        });
    </script>
@endsection
