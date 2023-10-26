
@extends('layouts.admin')
@section('title', 'Nuovo Membro')
@section('content')

<a class="back-btn"  href="{{route('adminstaff.list')}}">Lista Staff</a>
<div class="registration-container">
    <h2>Nuovo Membro</h2>
    {{ Form::open(['route' => 'adminstaff.store', 'method' => 'POST']) }}
    @csrf

    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', null, ['id' => 'username']) }}
        @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
resources/views/cliente/edit.blade.php
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, ['id' => 'name']) }}
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{ Form::label('cognome', 'Cognome') }}
        {{ Form::text('cognome', null, ['id' => 'cognome']) }}
        @error('cognome')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', ['id' => 'password']) }}
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{ Form::label('password_confirmation', 'Confirm Password') }}
        {{ Form::password('password_confirmation', ['id' => 'password_confirmation']) }}

        {{ Form::submit('Save') }}
        {{ Form::close() }}
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
    .btn {
        
        background-color: green;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
    }

    btn:hover {
        background-color: darkgreen;
        /* Autres styles au survol */
    }
</style>

@endsection

