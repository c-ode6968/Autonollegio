@extends('layouts.admin')
@section('title', 'Lista Clienti')
@section('content')

    @if(session('success'))
        <div class="alert alert-success" id="success">
            {{ session('success') }}
        </div>
    @endif

    <script>
   
        setTimeout(function() {
            var successMessage = document.getElementById('success');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000); // 5000 millisecondes = 5 secondes
    </script>

    <a class="back-btn"  href="{{route('admin')}}">Area Admin</a>
    <h1>Lista Clienti</h1>
 
    <form action="{{ route('admin.elimina') }}"  method="POST">
        @csrf
        @method('DELETE')
            <table class="table" style="margin-top:2em;">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Data di nascità</th>
                        <th>Residenza</th>
                        <th>Occupazione</th>
                        <th>Seleziona</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->username}}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->cognome }}</td>
                            <td>{{ date('d-m-Y', strtotime(Auth::user()->data_di_nascita)) }}</td>
                            <td>{{ $user-> residenza }}</td>
                            <td>{{ $user-> occupazione }}</td>
                            <td>
                                <input type="checkbox" name="client_ids[]" value="{{ $user->id }}">
                            </td>
                        </tr>
                    @endforeach    
                </tbody>
            </table>

        <button type="submit" class="btn">Elimina Clienti Selezionati</button>
    </form>
 @endsection