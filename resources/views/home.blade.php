@extends('layouts.public')
@section('title', ' | Home')
@section('content')

<div class="searchbar">
    <div class="search-form-container">
        <form action="{{route('home')}}" method="get">

        <label for="prezzo_min">Prezzo Min:</label>
        <input type="text" id="prezzo_min" value="{{ request('prezzo_min') }}" name="prezzo_min" placeholder="0" >
        
        <label for="prezzo_max">Prezzo Max:</label>
        <input type="text" id="prezzo_max" value="{{ request('prezzo_max') }}" name="prezzo_max" placeholder="2000">
        
        <button type="submit">Cerca</button>
    </form>
    </div>
</div>
    
        <div class="car-list">
            @foreach($autos as $auto)
                <div class="car-card">
                    @if(file_exists(public_path('images/' . $auto->image)))
                        @include('helpers/autoImg', ['attrs' => 'imagefrm', 'imgFile' => $auto->image])
                    @else   
                        <img src="{{ asset('images/default.jpg')}}" alt="Default Image">
                    @endif        
                    <h3 class="car-model">{{ $auto->modello }}</h3>
                    <p class="rental-price">Prezzo noleggio giornaliero: <strong>{{ $auto->prezzo_n_g }} € </strong> </p>
                    <div class="date-range">
                        <p>Data Inizio: {{ date('d-m-Y', strtotime($auto->data_inizio)) }}</p>
                        <p>Data Fine: {{ date('d-m-Y', strtotime($auto->data_fine)) }}</p>
                        
                        @if($auto -> data_fine < now())
                            <p style=" color: red;"><strong>Offerta scaduta</strong></p>
                        @endif    
                    </div>
                    <a class="details-link" href="{{ route('auto', ['idAuto' => $auto->idAuto]) }}">Dettagli</a>
                </div>
            @endforeach
        </div>
        <div class="pag">@include('pagination.paginator',['paginator' => $autos]) </div>
@endsection
