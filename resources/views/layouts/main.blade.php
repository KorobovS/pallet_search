<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pallet Search</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bd-wizard.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('main.index') }}"><img src="{{ asset('assets/images/logo.svg') }}" alt="logo"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('guest.article.index') }}">Гость</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin') }}">Администратор</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('personal') }}">Кладовщик</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<footer class="py-3 my-4">
    <p class="text-center text-muted">© 2022 Pallet Search, Inc</p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="{{ asset('assets/js/jquery.steps.min.js') }}"></script>
<script src="{{ asset('assets/js/bd-wizard.js') }}"></script>
<script>$(document).ready(function() {
        $('.select2').select2();
    });
</script>
</body>
</html>
