@extends('layout.layout')

@section('title')
    Pollings
@endsection

@section('content')
    <div class="container mt-4">
        @if ($poll['voted'])
            <span class="badge bg-success text-white mb-3">Kamu sudah voting ini</span> <br>
        @else
            <span class="badge bg-warning text-black mb-3">Ayo vote sekarang juga !</span> <br>
        @endif

        <h2 class="fw-bold">{{ $poll['title'] }}</h2>
        <p>{{ $poll['description'] }}</p>

        @error('choise')
            <div class="alert alert-danger">Pilih salah satu pilihan anda</div>
        @enderror

        @error('voted')
            <div class="alert alert-success">{{ $message }}</div>
        @enderror

        @if ($poll['is_deadline'])
            <div class="alert alert-warning">Polling ini sudah melewati deadline</div>
        @endif

        <div class="row">
            <form action="{{ route('vote.store') }}" method="post" class="d-flex flex-row gap-3">
                @csrf
                @method('post')
                <div class="col-md-9 d-flex align-items-center justify-content-center flex-column">
                    @foreach ($poll['choises'] as $item)
                        <label for="{{ $item['id'] }}" class="my-3" style="width: 100%">
                            {{ $poll['is_deadline'] }}
                            <div class="card p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <input type="text" name="poll_id" value="{{ $poll['id'] }}" class="d-none">
                                        @if ($poll['voted'] == 0 && $poll['is_deadline'] == false)
                                            <input id="{{ $item['id'] }}" type="radio" name="choise"
                                                class="form-check-input" value="{{ $item['id'] }}">
                                        @endif
                                        <span>{{ $item['choise'] }}</span>
                                    </div>

                                    @if ($item['voted'] !== 0 && $poll['is_deadline'] == true)
                                        <h5>{{ $item['result_persentase'] }}%</h5>
                                    @endif

                                </div>

                                @if ($item['voted'] !== 0 && $poll['is_deadline'] == true)
                                    <div class="progress mt-2">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: {{ $item['result_persentase'] }}%;">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </label>
                    @endforeach
                </div>

                <div class="col-md-3">
                    <div class="card bg-light d-flex justify-content-center align-items-center" style="height: 100%">
                        <h1 style="font-size: 70px" class="mb-0">{{ $poll['votes_count'] }}
                        </h1>
                        <span class="fw-bold">Voting</span>

                        <button class="btn btn-success btn-sm my-3"
                            @if ($poll['voted'] !== 0 || $poll['is_deadline'] == true) {{ 'disabled' }} @endif>Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
