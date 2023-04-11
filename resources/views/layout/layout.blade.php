<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('assets.css')

</head>

<body>
    @include('components.navbar')
    <div class="container px-5 pt-5">
        @yield('content')
    </div>
    @include('components.footer')
    @include('assets.js')
</body>

</html>
