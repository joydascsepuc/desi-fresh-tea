<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Cusotm CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
 
    {{-- Custom Navbar --}}
    {{-- @include('inc.nav') --}}

    {{-- Contents --}}
    <div class="container-fluid">
        @include('inc.messages')
        {{-- Show only for frontend --}}
        <?php if($justify != 'adminWork'){?>
            @include('inc.header')
        <?php }else{ ?>
            @include('inc.nav')
        <?php }?>
        @yield('content')
        <?php if($justify != 'adminWork'){?>
            @include('inc.footer')
        <?php }?>
    </div>
        
  
</body>
</html>
