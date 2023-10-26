@extends('layouts.public')
@section('title', ' | Catalogo')
@section('content')
    <div class="searchbar">
            <h2>Ricerca Auto</h2>
            <form action="{{ route('catalogo') }}" method="GET">
                <label for="prezzo_min">Prezzo Minimo:</label>
                <input type="text" id="prezzo_min" name="prezzo_min" value="{{ request('prezzo_min') }}">

                <label for="prezzo_max">Prezzo Massimo:</label>
                <input type="text" id="prezzo_max" name="prezzo_max" value="{{ request('prezzo_max') }}">

                @can('isUser')
                    <label for="data_inizio">Disponibile Dal:</label>
                    <input type="date" id="data_inizio" name="data_inizio" value="{{ request('data_inizio')}}" placeholder="02-08-2023">
                    
                    <label for="data_fine">Al:</label>
                    <input type="date" id="data_fine" name="data_fine"  value="{{ request('data_fine')}}"  placeholder="02-09-2024">
                @endcan
                <button type="submit">Cerca</button>
            </form>
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
@endsection
