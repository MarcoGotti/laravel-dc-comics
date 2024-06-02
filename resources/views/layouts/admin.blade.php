<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('pageTitle', 'laravel-dc-comics')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased bg-primary-subtle">

    <a class="btn btn-warning btn-sm position-fixed top-0 end-0 m-2" href="{{ route('home') }}">HomePage</a>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 bg-dark">

                <div class="text-primary fs-1 p-3" style="height: 80px">ADMIN</div>

                <nav class="nav nav-pills flex-column">
                    <a class="nav-link {{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : '' }}"
                        aria-current="page" href="{{ route('admin.dashboard') }}">Dashboard</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}"
                        href="{{ route('comics.index') }}">Comic-list</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </nav>


            </div>

            <main class="col-10" style="padding: revert;">
                @yield('content')
            </main>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
