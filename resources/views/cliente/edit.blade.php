
@extends('layouts.user')
@section('title', 'Modifica')
@section('content')

<a class="back-btn" href="{{route('cliente')}}">Area cliente</a>
<div class="registration-container">

    <h2>Modifica profilo Cliente</h2>
    {{ Form::open(['route' => 'cliente.update', 'method' => 'PUT']) }}
    @csrf
    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{  Form::text('username', old('username', Auth::user()->username), ['class' => 'form-control']) }}
        @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{  Form::label('name', 'Nome') }}
        {{  Form::text('name', old('name', Auth::user()->name), ['class' => 'form-control']) }}
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{  Form::label('cognome', 'Cognome') }}
        {{  Form::text('cognome', old('cognome', Auth::user()->cognome), ['class' => 'form-control']) }}
        @error('cognome')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{  Form::label('data_di_nascita', 'Data di nascita') }}
        {{  Form::date('data_di_nascita', old('data_di_nascita', Auth::user()->data_di_nascita), ['class' => 'form-control']) }}
        @error('data_di_nascita')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{  Form::label('residenza', 'Residenza') }}
        {{  Form::text('residenza', old('residenza', Auth::user()->residenza), ['class' => 'form-control']) }}
        @error('residenza')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{ Form::label('occupazione', 'Occupatione') }}
        {{ Form::select('occupazione', [
            '' => 'Seleziona...',
            'Studente' => 'Studente',
            'Informatico' => 'Informatico',
            'Cameriere' => 'Cameriere',
            'Camionista' => 'Camionista',
            'Cantante' => 'Cantante',
            'Cardiologo' => 'Cardiologo',
            'Cuoco' => 'Cuoco',
            'Libero Professionista' => 'Libero Professionista'
        ], old('occupazione', Auth::user()->occupazione), ['class' => 'form-control']) }}
        @error('occupazione')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Password') }}
        {{  Form::password('password', ['class' => 'form-control']) }}
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        {{  Form::label('password_confirmation', 'Confirm password') }}
        {{  Form::password('password_confirmation', ['class' => 'form-control']) }}
    </div>

    {{  Form::submit('Salva', ['class' => 'btn']) }}
    {{  Form::close() }}
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
