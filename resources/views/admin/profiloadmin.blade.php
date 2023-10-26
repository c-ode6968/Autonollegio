
@extends('layouts.admin')
@section('content')
<div class="profilo">
<a class="back-btn" href="{{route('admin')}}">Area Admin</a>

    <h1>DATI PROFILO</h1>
    <section class="about-dev">
        <div class="profile-card-container">
            <h2>Nome: {{ Auth::user()->name }}</h2>
            <h2>Cognome: {{ Auth::user()->cognome }}</h2>
        </div>
       
        <div class="profile-card">
            <h2>Username: {{ Auth::user()->username }}</h2>
            <h2>Data di nascità: {{ Auth::user()->data_di_nascita }}</h2>
            <h2>Occupazione: {{ Auth::user()->occupazione }}</h2>
            <h2>Ruolo: {{ Auth::user()->role }}</h2>
        </div>    
    </section>
</div>

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