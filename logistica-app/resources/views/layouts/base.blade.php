<!DOCTYPE html>
<html lang="pt-BR">
{{-- data-bs-theme="dark" --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('head')
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />,
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
    <header class="mb-4">
        @include('layouts/nav')
    </header>
    <div class="row">

    </div>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>
