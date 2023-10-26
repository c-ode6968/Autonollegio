@extends('layouts.admin')
@section('title', 'Lista Staff')
@section('content')

    @if(session('success'))
        <div class="alert alert-success" id="succes">
            {{ session('success') }}
        </div>
    @endif

    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('succes');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000); 
    </script>

<a class="back-btn"  href="{{route('admin')}}">Area Admin</a>
    <div class="ins">
        <a href="{{route('adminstaff.crea')}}" method='Post' class="insert-link">Nuovo Membro</a>
    </div>
<div class="crud-container">
    <h2>Lista Membri Staff</h2>
    <table>
    <tr>
            <th><strong>Username</strong></th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        
        @foreach($staffs as $staff)
        <tr>
            <th>{{$staff -> username}}</th>
            <td>{{$staff -> name}}</td>
            <td>{{$staff -> cognome}}</td>
            <td>{{$staff -> role}}</td>
            <td>
                <div class="button-container">
                    <a href="{{ route('adminstaff.modifica', ['id' => $staff->id]) }}"><button class="b1">Modifica</button></a>
                            <form action="{{ route('adminstaff.delete', ['id' => $staff->id]) }}" 
                                onclick="return confirm('Sei sicuro di voler cancellare l\'uente selezionato ?') " method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                            <button type="submit"  class="b3">Elimina</button>
                        </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div
@endsection