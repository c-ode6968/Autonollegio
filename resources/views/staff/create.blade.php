@extends('layouts.staff')
@section('title', 'Crea Auto')
@section('content')



<a  class="back-btn" href="{{route('auto.listaauto')}}" class="back-btn">Lista Auto</a>

<div class="form-container">
    <h2>Inserisci Auto</h2>
    {{ Form::open(['route' => 'auto.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    
    {{ Form::label('marca', 'Marca:') }}
    {{ Form::text('marca', null, ['id' => 'marca', 'placeholder' => "Marca dell'auto"]) }}
    @error('marca')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror   

    {{ Form::label('modello', 'Modello:') }}
    {{ Form::text('modello', null, ['id' => 'modello', 'placeholder' => "Modello dell'auto"]) }}
    @error('modello')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('numero_posti', 'Numero di posti:') }}
    {{ Form::number('numero_posti', null, ['id' => 'numero_posti', 'placeholder' => 'Numero di posti']) }}
    @error('numero_posti')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('targa', 'Targa:') }}
    {{ Form::text('targa', null, ['id' => 'targa', 'placeholder' => 'Targa']) }}
    @error('targa')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('allestimento', 'Allestimento:') }}
    {{ Form::text('allestimento', null, ['id' => 'allestimento', 'placeholder' => 'Allestimento']) }}
    @error('allestimento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('prezzo_n_g', 'Prezzo di noleggio giornaliero:') }}
    {{ Form::number('prezzo_n_g', null, ['id' => 'prezzo_n_g', 'placeholder' => 'Prezzo noleggio']) }}
    @error('prezzo_n_g')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('data_inizio', 'Data inizio noleggio :') }}
    {{ Form::date('data_inizio', null, ['id' => 'data_inizio', 'placeholder' => 'Data inizio nolleggio']) }}
    @error('data_inizio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('data_fine', 'Data fine noleggio:') }}
    {{ Form::date('data_fine', null, ['id' => 'data_fine', 'placeholder' => 'Data fine nolleggio']) }}
    @error('data_fine')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('image', 'Image:') }}
    {{ Form::file('image', ['id' => 'image']) }}
 

    {{ Form::submit('Inserisci', ['class' => 'btn'])  }}
    {{ Form::close() }}
</div>

<style>
    .btn {
        
        background-color: green;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        width: 100%;
    }

    btn:hover {
        background-color: darkgreen;
    }
</style>
@endsection

  