@extends('layouts.admin')
@section('title', 'Nuova FAQ')
@section('content')

<a class="back-btn"  href="{{route('admin.listafaq')}}">Lista FAQ</a>

<div class="faq-container">
    
    <h2>Inserisci una nuova FAQ</h2>
    <div class="add-form">
        <div>
            <form method="POST" action="{{ route('faq.store') }}">
                @csrf
                <div class="form-group">
                    <label for="domanda">Domanda :</label>
                    <input type="text" id="domanda" name="domanda" class="question-input" placeholder="Inserisci la domanda">
                </div>
                @error('domanda')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="risposta">Risposta :</label>
                    <textarea id="risposta" name="risposta" class="answer-input" placeholder="Inserisci la risposta" cols="50" rows="10"></textarea>
                </div>
                @error('risposta')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="text-center">
                    <button type="submit" class="btn-pri">Aggiungi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection    
