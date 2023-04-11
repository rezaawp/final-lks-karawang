<nav class="navbar navbar-expand-sm navbar-dark my-bg fixed-top">
    <div class="container px-5">
        <a class="navbar-brand text-black fw-bold" href="{{ route('admin.dashboard') }}">Polling Kantor</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('admin.dashboard') }}" aria-current="page">Home <span
                            class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('admin.createpoll') }}" aria-current="page">Buat
                        Polling<span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black" href="{{ route('user.store') }}" aria-current="page">
                        Tambah User
                        <span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        @method('post')
                        <button type="submit" class="btn btn-danger btn-sm nav-link text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
