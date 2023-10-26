
@extends('layouts.public')
@section('title', 'FAQ')
@section('content')
 
@can('isAdmin')
<a href="{{route('admin')}}" class="back-link">Back</a>
@endcan

<h1>Domande Frequenti</h1>

<div class="faq-container">
    @foreach($faqs as $faq)
        <div class="question" role="button" aria-expanded="false">
            <div class="question-text" mar>{{$faq->domanda}}</div>
            <div class="answer">{{$faq->risposta}}</div>
        </div>
    @endforeach
</div>

    <div class="pag">@include('pagination.paginator',['paginator' => $faqs]) </div>

@endsection 

