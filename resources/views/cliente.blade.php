@extends('layouts.user')

@section('title', 'Pagina Cliente')

@section('content')

<div class="profile-area">
        <h2>Pagina Cliente</h2>
        <ul> 
            <li><a href="{{route('cliente.profilocliente')}}">Profilo Cliente</a></li>
            <li><a href="{{route('cliente.edit')}}">Modifica dati personali</a></li>
        </ul>
</div>
@endsection