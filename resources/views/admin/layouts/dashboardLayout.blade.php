<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="min-vh-100 d-flex flex-column">
    <nav class="navbar navbar-light bg-light d-lg-none shadow-sm">
        <div class="container-fluid">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <main class="d-flex flex-grow-1">
        <div class="container-fluid">
            <div class="row">
                @include('admin.partials.sidebar')

                <div class="col-12 col-lg-9 col-xl-10 p-0">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
</body>
</html>