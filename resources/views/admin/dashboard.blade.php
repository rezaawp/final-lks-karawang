@extends('layout.layoutadmin')

@section('title')
    Pollings
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Dashboard</h2>
            </div>

            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <h1 class="fw-bold text-center" style="font-size: 70px">{{ $pollings }}</h1>
                                <h5 class="fw-bold text-center">Polling Dibuat</h5>

                                <div class="container d-flex justify-content-center mb-3" style="width: 100%">
                                    <a href="{{ route('admin.polls') }}" class="btn btn-success btn-sm">Detail</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <h1 class="fw-bold text-center" style="font-size: 70px">{{ $votings }}</h1>
                                <h5 class="fw-bold text-center">Voting</h5>

                                <div class="container d-flex justify-content-center mb-3" style="width: 100%">
                                    <button class="btn btn-success btn-sm">Detail</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <h1 class="fw-bold text-center" style="font-size: 70px">{{ $users }}</h1>
                                <h5 class="fw-bold text-center">Users</h5>

                                <div class="container d-flex justify-content-center mb-3" style="width: 100%">
                                    <button class="btn btn-success btn-sm">Detail</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
