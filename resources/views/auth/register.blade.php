@extends('layouts.public')
@section('title', ' | Registrazione')
@section('content')

<div class="registration-container">
    <h2>Registrazione Cliente</h2>

    {{ Form::open(['route' => 'register']) }}
    {{ csrf_field() }} 
    <div class="wrap-input">
        <p>Hai un account <a href="{{ route('login') }}">Accedi</a></p>
    </div>

    {{ Form::label('username', 'Username') }}
    {{ Form::text('username', null,  ['placeholder' => 'Inserisci l\'username']) }}
    @error('username')
    <ul class="errors">
        <li>{{ $message }}</li>
    </ul>
    @enderror

    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['placeholder' => 'Inserisci il nome']) }}
    @error('name')
    <ul class="errors">
        <li>{{ $message }}</li>
    </ul>
    @enderror

    {{ Form::label('cognome', 'Cognome', ['class' => 'details']) }}
    {{ Form::text('cognome', null, ['placeholder' => 'Inserisci il cognome']) }}
    @error('cognome')
    <ul class="errors">
        <li>{{ $message }}</li>
    </ul>
    @enderror

    {{ Form::label('residenza', 'Residenza') }}
    {{ Form::text('residenza', null, ['placeholder' => 'Inserisci la residenza']) }}
    @error('residenza')
    <ul class="errors">
        <li>{{ $message }}</li>
    </ul>
    @enderror

    {{ Form::label('data_di_nascita', 'Data di nascita') }}
    {{ Form::date('data_di_nascita', null, ['placeholder' => 'Inserisci la data di nascita']) }}
    @error('data_di_nascita')
    <ul class="errors">
        <li>{{ $message }}</li>
    </ul>
    @enderror

    {{ Form::label('occupazione', 'Occupazione') }}
    {{ Form::select('occupazione', [
        'Studente' => 'Studente',
        'Impiegato' => 'Impiegato',
        'Cameriere' => 'Cameriere',
        'Camionista' => 'Camionista',
        'Cantante' => 'Cantante',
        'cardiologo' => 'cardiologo',
        'Cuoco' => 'Cuoco',
        'Libero Professionista' => 'Libero Professionista',
        'Altro' => 'Altro',
    ], null, ['placeholder' => 'Seleziona l\'occupazione']) }}
    @error('occupazione')
    <ul class="errors">
        <li>{{ $message }}</li>
    </ul>
    @enderror

    {{ Form::label('password', 'Password', 'null ',['class' => 'details']) }}
    {{ Form::password('password', ['placeholder' => 'Inserisci la password']) }}
    @error('password')
    <ul class="errors">
        <li>{{ $message }}</li>
    </ul>
    @enderror

    {{ Form::label('password-confirm', 'Conferma Password', ['class' => 'details']) }}
    {{ Form::password('password_confirmation', ['placeholder' => 'Conferma Password']) }}

    <div>
        {{ Form::submit('Registrati', ['class' => 'button-login']) }}
    </div>
    {{ Form::close() }}
</div>
@endsection
