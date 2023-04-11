@extends('layout.layoutadmin')

@section('title')
    Buat Polling
@endsection

@section('content')
    <div style="height: 90vh" class="container d-flex flex-column justify-content-center align-items-center">
        @error('choisesNull')
            <div class="alert alert-danger" style="width: 30rem">
                {{ $message }}
            </div>
        @enderror

        @if (session('stored'))
            <div class="alert alert-success" style="width: 30rem">
                {{ session('stored') }}
            </div>
        @enderror

        <div class="card" style="width: 30rem">
            <div class="card-header">
                <h3 class="fw-bold text-center">Buat Polling</h3>
                <small>
                    <p align="center">Silahkan buat polling dengan kepentingan tertentu</p>
                </small>
            </div>

            <div class="card-body">
                <form action="{{ route('polling.store') }}" method="post">
                    @csrf
                    @method('post')
                    <label for="title" style="width: 100%">
                        Title :
                        <input type="text" value="{{ old('title') }}" name="title" id="title"
                            class="@error('title')
                    {{ 'is-invalid' }}
                    @enderror form-control">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="description" style="width: 100%">
                        Description :
                        <textarea type="text" value="{{ old('description') }}" name="description" id="description"
                            class="@error('description')
                    {{ 'is-invalid' }}
                    @enderror form-control"> </textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="deadline" style="width: 100%">
                        Deadline :
                        <input value="{{ old('deadline') }}" type="datetime-local" name="deadline" id="deadline"
                            class="@error('deadline')
                    {{ 'is-invalid' }}
                    @enderror form-control">
                        @error('deadline')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <label for="deadline" style="width: 100%">
                        Pilihan Polling :
                        <div id="choises-content">
                            <input type="text" name="choises[]" id="choises"
                                class="@error('choises')
                    {{ 'is-invalid' }}
                    @enderror form-control">
                        </div>
                        @error('choises')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </label>

                    <div class="d-flex justify-content-end mt-3">
                        <button type="button" class="btn btn-primary btn-sm" id="add-input"> + Tambah Choise</button>
                    </div>

                    <div class="d-flex justify-content-center mt-3 flex-column">
                        <button class="btn btn-primary">Buat Polling</button>
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
