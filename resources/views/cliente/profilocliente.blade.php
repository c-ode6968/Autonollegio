@extends('layouts.user')
@section('title', 'Area Cliente')
@section('content')

<div class="profilo">
<a class="back-button" href="{{route('cliente')}}">Area cliente</a>

    <h1>DATI PROFILO</h1>
    <section class="about-dev">
        <div class="profile-card-container">
            <h2>Username: {{ Auth::user()->username }}</h2>
            <h2>Nome: {{ Auth::user()->name }}</h2>
            <h2>Cognome: {{ Auth::user()->cognome }}</h2>
        </div>
       
        <div class="profile-card">
            <h2>Residenza: {{ Auth::user()->residenza }}</h2>
            <h2>Data di nascità: {{ date('d-m-Y', strtotime(Auth::user()->data_di_nascita)) }}</h2>
            <h2>Occupazione: {{ Auth::user()->occupazione }}</h2>
            <h2>Ruolo: {{ Auth::user()->role }}</h2>
        </div>    
    </section>
</div>
@endsection