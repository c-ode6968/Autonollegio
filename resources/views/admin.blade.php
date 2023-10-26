@extends('layouts.admin')
@section('title', 'Pagina Admin')
@section('content')
<div class="profile-area">
    <h2>Area Administratore</h2>
    <ul class="profile-nav">
        <li><a href="{{route('admin.clienti')}}">Gesszione Clienti</a></li>
        <li><a href="{{route('adminstaff.list')}}">Geszione  Staff</a></li>
        <li><a href="{{route('admin.listafaq')}}">Gestione Delle FAQ</a></li>
        <li><a href="{{route('admin.filtroauto')}}">Auto nollegiato per ciascun mese / <br>Nell'anno corrente</a></li>
    </ul>
</div>

<style>
 


 .profile-area {
    background-color: #f9f9f9;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.profile-nav {
    list-style-type: none;
    padding: 0;
}

.profile-nav li {
    margin-bottom: 10px;
}

.profile-nav a {
    display: block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.profile-nav a:hover {
    background-color: #0056b3;
}

</style>
@endsection