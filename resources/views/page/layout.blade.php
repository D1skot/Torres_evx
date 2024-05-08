<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Torrex EVX</title>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link href="{{ asset('css/app.css') }}?{{ date('YmdHis') }}" rel="stylesheet">
</head>

<body>
    <header>
        <div class="bg-white px-lg-5 px-3 py-3">
            <a href="{{route('page.index')}}"><img class="img-fluid" src="{{asset('img/logo.webp')}}" alt="Torres EVX"></a>
        </div>
        <nav class="navbar navbar-expand-lg px-lg-5 px-3">
            <div class="container-fluid">
                <button class="navbar-toggler border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('page.index')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page.agenda')}}">Agenda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page.map_object')}}">Mapa obiektu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('page.contact')}}">Kontakt</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')

    <footer>
        <h4 class="text-center text-white mb-3">
            SZKOLENIE TORRES EVX
        </h4>

        <a class="text-white" href="{{route('page.contact')}}">
            KONTAKT
        </a>

    </footer>

</body>
<script src="{{ asset('js/app.js') }}?{{ date('YmdHis') }}"></script>

</html>
