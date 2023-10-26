@extends('layouts.admin')
@section('title', 'Modifica FAQ')
@section('content')

<a href="{{route('admin')}}" class="back-link">Lista Faq</a>

<div class="faq-container">
    <h2>Modifica FAQ</h2>
    <div class="add-form">

    <form method="POST" action="{{ route('faq.update', $faq->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="domanda">Domanda :</label>
            <input type="text" id="domanda" name="domanda" value="{{ $faq->domanda }}" class="form-control">
        </div>
        @error('domanda')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="risposta">Risposta :</label>
            <textarea id="risposta" name="risposta" class="form-control" rows="5">{{ $faq->risposta }}</textarea>
        </div>
        @error('risposta')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
    </div>
</div>
@endsection    
