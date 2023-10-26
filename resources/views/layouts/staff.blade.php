<!DOCTYPE html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AutoNoleggio | @yield('title', 'Staff')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style_aziende.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style_login.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style_faq2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style_chisiamo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style_contatti.css')}}">
    <link rel="stylesheet" href="{{ asset('css/catalogo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dovesiamo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/registrazione.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style_offerta.css')}}">
    <link rel="stylesheet" href="{{ asset('css/staff.css')}}">
    <link rel="stylesheet" href="{{ asset('css/areacliente.css')}}">
    <link rel="stylesheet" href="{{ asset('css/insert.css')}}">
    <link rel="stylesheet" href="{{ asset('css/crudauto.css')}}"    
    <link rel="stylesheet" href="{{ asset('css/nuovaauto.css')}}">
    <link rel="stylesheet" href="{{asset('js/flash.js')}}">


    @section('scripts')
    @show
    <script src="js/script.js" defer></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
     <!--Navbar-->
    <div id="nav">
        @include('layouts/navstaff')
    </div>

    <!--Content-->


        @yield('content')


    <!--Footer-->

  
    <div class="footer">
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('contatti')}}">Contatti</a></li>
            <li><a href="{{route('faq')}}">Faq</a></li>
            <li><a href="{{route('chisiamo')}}">Chi Siamo</a></li>
        </ul>
        <p>© 2023 Auto Noleggio. Tutti i diritti riservati.</p>
    </div>

</body>
</html>