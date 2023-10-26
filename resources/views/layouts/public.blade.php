<!DOCTYPE html>

<html lang="it">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AutoNoleggio  @yield('title', '')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/catalogo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/chisiamo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/staff.css')}}">
    <link rel="stylesheet" href="{{ asset('css/contatti.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <link rel="stylesheet" href="{{ asset('css/register.css')}}">
    <link rel="stylesheet" href="{{ asset('css/faq.css')}}">
    <link rel="stylesheet" href="{{ asset('css/viewfaq.css')}}">
    <link rel="stylesheet" href="{{ asset('css/detauto.css')}}">
    <link rel="stylesheet" href="{{ asset('css/search.css')}}">
   


    <script src="js/faq.js" defer></script>


    <script src="js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
     <!--Navbar-->
    <div id="nav">
        @include('layouts/navbar')
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