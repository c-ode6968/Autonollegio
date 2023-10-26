
@extends('layouts.public')
@section('title', 'Contatti')
@section('content')
 

@can('isAdmin')
<a href="{{route('admin')}}" class="back-link">Back</a>
@endcan
<div class="page-container">
        <h2>Contatti</h2>
        <p>Telefono: 123-456-7890</p>
        <p>Email: info@autonoleggio.com</p>
        <p>Indirizzo: Via delle Auto, 123</p>
    </div>

    <div class="page-container">
        <h2>Dove Siamo</h2>
        <p>Siamo situati nel cuore della città, facilmente raggiungibili con mezzi pubblici o in auto.</p>
        <p>Indirizzo: Via delle Auto, 123</p>
        <p>Città: Ancona</p>
        <p>Cap: 60128</p>
    </div>

@endsection 