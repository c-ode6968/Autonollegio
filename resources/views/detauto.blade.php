@extends('layouts.public')
@section('title', 'Detaglio Auto')
@section('content')

<a class="back-btn"  href="{{route('home')}}">Home</a>
    
    <h2 class="page-title">Descrizione Auto</h2>
    <div class="car-description">
    @if(file_exists(public_path('images/' . $auto->image)))
        @include('helpers/autoImg', ['attrs' => 'imagefrm', 'imgFile' => $auto->image])
    @else
        <img src="{{ asset('images/default.jpg')}}" alt="Default Image">
    @endif 
    <div class="car-details">
        <p><strong>Marca:</strong> {{ $auto->marca }}</p>
        <p><strong>Modello:</strong> {{ $auto->modello }}</p>
        <p><strong>Numero di Posti:</strong> {{ $auto->numero_posti }}</p>
        <p><strong>Targa:</strong> {{ $auto->targa }}</p>
        <p><strong>Allestimento:</strong> {{ $auto->allestimento }}</p>
        <p><strong>Data inizio noleggio:</strong> {{ date('d-m-Y', strtotime($auto->data_inizio)) }}</p>
        <p><strong>Data fine noleggio:</strong> {{ date('d-m-Y', strtotime($auto->data_fine)) }}</p>
        @if($auto -> data_fine < now())
            <p style=" color: red;"><strong>Offerta scaduta</strong></p>
        @else
        
        <p><strong>Prezzo di Noleggio Giornaliero:</strong> {{ $auto->prezzo_n_g }} €</p>
            @can('isUser')
            <form action="{{ route('auto.prenota', $auto) }}" method="POST">
                @csrf
                <div class="ottieni-coup">
                    <button class="button-ottieni" type="submit">Noleggia</button>
                </div>
            </form> 
            @endcan
        @endif 
    </div>
</div>

<style>
    
    .car-description {
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #ccc;
    padding: 15px;
    margin: 10px;
    border-radius: 5px;
}

.car-description img {
    max-width: 650px;
    margin-right: 20px;
}

.car-details {
    flex: 1;
}

.car-details p {
    margin: 5px 0;
}

.ottieni-coup {
    margin-top: 10px;
}

.button-ottieni {
    background-color: #007bff;
    color: #fff;
    padding: 8px 15px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button-ottieni:hover {
    background-color: #0056b3;
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

