<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Larazada</title>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card bg-white p-5 shadow">
                    <div class="display-5 fw-bold">Larazada</div>
                    <p>A lightweight e-commerce application built with <strong>Laravel</strong>.</p>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>

</html>