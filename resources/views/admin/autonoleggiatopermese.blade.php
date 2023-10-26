@extends('layouts.admin')
@section('title', 'LIsta Stats')
@section('content')


<a class="back-btn"  href="{{route('admin')}}">Area Admin</a>

<h1 style="margin-top: 40px;">Statistiche Auto Noleggiate per l'anno {{ $annoCorrente }}</h1>

<div class="auto">
    <table class="table">
        <tr>
            <th>Mese</th>
            <th>Numero Auto Noleggiate</th>
        </tr>
        @foreach($statAutos as $statistica)
            <tr>
                <td>{{ Carbon\Carbon::createFromDate($statistica->mese)->format('F') }}</td>
                <td>{{ $statistica->numero_auto_noleggiate }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection