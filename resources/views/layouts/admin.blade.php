<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- our style -->
    <link href="{{ URL::asset('css/style_admin.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="wrapper">
            <div class="side-bar">
                <ul>
                    <li class="menu-head">
                        ADRESS BOOK <a href="#" class="push_menu"><span class="glyphicon glyphicon-align-justify pull-right"></span></a>
                    </li>
                    <div class="menu">
                        <li>
                            <a href="#">Accueil <span class="glyphicon glyphicon-dashboard pull-right"></span></a>
                        </li>
                        <li>
                            <a href="#">Contacts<span class="glyphicon glyphicon-star pull-right"></span></a>
                            <ul class="parent">
                                <li><a href="#"><span class="glyphicon glyphicon-list pull-left" style="padding-right: 10px;"></span> Liste </a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-plus pull-left" style="padding-right: 10px;"></span> Ajouter </a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-list pull-left" style="padding-right: 10px;"></span> Exporter en CSV</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('logout')}}">Deconnexion <span class="glyphicon glyphicon-cog pull-right"></span></a>
                        </li>
                    </div>

                </ul>
            </div>
            <div class="content">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->

<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>
