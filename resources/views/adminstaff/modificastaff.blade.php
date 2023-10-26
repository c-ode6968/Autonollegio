
@extends('layouts.admin')
@section('title', 'Modifica Membro')
@section('content')

<a class="back-btn"  href="{{route('adminstaff.list')}}">Lista Staff</a>

<div class="registration-container">
    <h2>Modifica Dati Staff</h2>
    <form method="POST" action="{{ route('adminstaff.update', ['id' => $staff -> id]) }}">
        @csrf
        @method('PUT')
        
        <label for="username">Username</label>
        <input type="text" id="username" name="username" value="{{ old('username', $staff->username) }}">
        @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name', $staff->name) }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="cognome">Surname</label>
        <input type="text" id="cognome" name="cognome" value="{{ old('cognome', $staff->cognome) }}">
        @error('cognome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation">

        <button type="submit">Save</button>
    </form>
</div>
@endsection

