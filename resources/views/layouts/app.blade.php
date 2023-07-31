<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSPORTE</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    @include('layouts.styles')
    @stack('styles')
</head>

<link rel="stylesheet" href="{{ asset('css/styles-light.css') }}" id="theme-styles">

<body>

      {{-- <button class="button" id="mode-toggle">Cambiar Modo</button> --}}
<script src="{{ asset('js/app.js') }}"></script>

    @include('layouts.header')
    <main class="primary-background">
        <div class="container"></div>
        <div class="row">
            <div class="col s12 m12 l12 l12 xl10 offset-xl1">
                @include('layouts.response')
                @yield('content')
            </div>
        </div>

        @include('layouts.preloader')
        @include('layouts.footer')
    </main>

    @include('layouts.scripts')
    @stack('scripts')
</body>

</html>
