@extends('layouts.user')
@section('title', 'Confirm')
@section('content')

<a class="back-btn"  href="{{route('catalogo')}}">Catalogo</a>
 <h1 style="text-align: center; margin-top:1em; padding:6em;">Prenotazione avenuta con sucesso. <br><p>La macchina sarrà disponibile al ritiro preso il nostro ufficio il giorno successivo.</p></h1>
 

 <style>
    .back-btn {
        display: block;
        width: 150px;
        padding: 10px 20px;
        background-color: #DAA520	;
        color: #fff;
        text-align: center;
        text-decoration: none;
        border-radius: 4px;
        margin: 0 auto;
        margin-top: 70px;
    } 
 </style>
@endsection
