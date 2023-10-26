@extends('layouts.staff')
@section('title', 'Area Staff')
@section('content')
<div class="profile-area">
        <h2>Area Staff</h2>
        <ul> 
            <li><a href="{{route('auto.listaauto')}}">Lista Auto</a></li>
            <li><a href="{{route('auto.autonoleggiato')}}">Elenco auto noleggiate</a></li>
        </ul>
</div>
@endsection