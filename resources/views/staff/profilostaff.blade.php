@extends('layouts.staff')
@section('title', 'Area staff')
@section('content')

<div class="profilo">
<a class="back-button" href="{{route('staff')}}">Area Staff</a>

    <h1>DATI PROFILO</h1>
    <section class="about-dev">
        <div class="profile-card-container">
            <h2>Username: {{ Auth::user()->username }}</h2>
        </div>
       
        <div class="profile-card">
            <h2>Nome: {{ Auth::user()->name }}</h2>
            <h2>Cognome: {{ Auth::user()->cognome }}</h2>
            <h2>Ruolo: {{ Auth::user()->role }}</h2>
        </div>    
    </section>
</div>
@endsection