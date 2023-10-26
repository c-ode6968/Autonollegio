@extends('layouts.staff')
@section('title', 'Elenco Auto Noleggiato')
@section('content')


<a class="back-btn" href="{{route('staff')}}" style="margin-top:2em;">Area Staff</a>
<h1 style="font-size: 40px; text-align:center; text-transform:uppercase; margin-top:1em;">Elenco Auto Noleggiate</h1>

<div style="text-align: center; ">
    <form action="{{ route('auto.autonoleggiato') }}" method="GET">
        <label for="mese" style="font-size: 30px;">Seleziona un mese:</label>
        <select name="mese" id="mese" style="font-size: 20px;">
            <option value="1">Gennaio</option>
            <option value="2">Febbraio</option>
            <option value="3">Marzo</option>
            <option value="4">Aprile</option>
            <option value="5">Maggio</option>
            <option value="6">Giugno</option>
            <option value="7">Luglio</option>
            <option value="8">Agosto</option>
            <option value="9">Settembre</option>
            <option value="10">Ottobre</option>
            <option value="11">Novembre</option>
            <option value="12">Dicembre</option>
        </select>
        <button type="submit" style="font-size: 20px;">Visualizza</button>
    </form>
</div>
<br><br><br><br>

    <p style="font-size: 20px; text-align: center;">Lista delle auto noleggiate nel mese di <strong>{{$meseSelezionato}}</strong> </p>
    @if ($message)
        <p style="font-size: 20px; text-align: center;">{{ $message }}</p>
    @endif

@if(isset($autoNoleggiate))
    <table>
        <tr>
            <th>Marca</th>
            <th>Modello</th>
            <th>Targa</th>
            <th>Cliente</th>
        </tr>
        @foreach($autoNoleggiate as $prenotazione)
            <tr>
                <td>{{ $prenotazione->auto->marca }}</td>
                <td>{{ $prenotazione->auto->modello }}</td>
                <td>{{ $prenotazione->auto->targa }}</td>
                <td>{{ $prenotazione->user->name }}</td>
            </tr>
        @endforeach
    </table>
@endif

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
</style>
@endsection