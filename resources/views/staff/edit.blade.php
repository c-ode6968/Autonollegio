
@extends('layouts.staff')
@section('title', 'Modifica Auto')
@section('content')

<a  class="back-btn" href="{{route('auto.listaauto')}}" class="back-btn">Lista Auto</a>

<div class="form-container">
    <h2>Modifica Auto</h2>

    {{ Form::open(['route' => ['auto.update', $auto->idAuto], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    {{ Form::label('marca', 'Marca:') }}
    {{ Form::text('marca', $auto->marca, ['id' => 'marca', 'placeholder' => "Marca dell'auto"]) }}
    @error('marca')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror   

    {{ Form::label('modello', 'Modello:') }}
    {{ Form::text('modello', $auto->modello, ['id' => 'modello', 'placeholder' => "Modello dell'auto"]) }}
    @error('modello')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('numero_posti', 'Numero di posti:') }}
    {{ Form::number('numero_posti', $auto->numero_posti, ['id' => 'numero_posti', 'placeholder' => 'Numero di posti']) }}
    @error('numero_posti')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('targa', 'Targa:') }}
    {{ Form::text('targa', $auto->targa, ['id' => 'targa', 'placeholder' => 'Targa']) }}
    @error('targa')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('allestimento', 'Allestimento:') }}
    {{ Form::text('allestimento', $auto->allestimento, ['id' => 'allestimento', 'placeholder' => 'Allestimento']) }}
    @error('allestimento')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('prezzo_n_g', 'Prezzo di noleggio giornaliero:') }}
    {{ Form::number('prezzo_n_g', $auto->prezzo_n_g, ['id' => 'prezzo_n_g', 'placeholder' => 'Prezzo noleggio']) }}
    @error('prezzo_n_g')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('data_inizio', 'Data inizio noleggio :') }}
    {{ Form::date('data_inizio', $auto->data_inizio, ['id' => 'data_inizio', 'placeholder' => 'Data inizio nolleggio']) }}
    @error('data_inizio')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('data_fine', 'Data fine noleggio:') }}
    {{ Form::date('data_fine', $auto->data_fine, ['id' => 'data_fine', 'placeholder' => 'Data fine nolleggio']) }}
    @error('data_fine')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 

    {{ Form::label('image', 'Image:') }}
    {{ Form::file('image', ['id' => 'image']) }}

    {{ Form::submit('Modifica', ['class' => 'btn']) }}
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
</style>

@endsection
