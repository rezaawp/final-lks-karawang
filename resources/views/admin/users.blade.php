@extends('layout.layoutadmin')

@section('title')
    Pollings
@endsection

@section('content')
    <div class="table-responsive mt-3">
        <h1 class="fw-bold mt-3 text-center">Daftar User : </h1>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Username</th>
                    <th scope="col">Divisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td scope="row">{{ $user['name'] }}</td>
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['divisi']['name'] }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
