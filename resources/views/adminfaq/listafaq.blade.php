@extends('layouts.public')
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
        }, 5000); 
    </script>


<a class="back-btn"  href="{{route('admin')}}">Area Admin</a>
    <div class="ins">
        <a href="{{route('admin.nuovafaq')}}" method='Post' class="insert-link">Nuova FAQ</a>
    </div>
    
    <div class="crud-container">
    <h2>Gestione FAQ</h2>
    <table>
            <tr>
                <th>Id</th>
                <th>Domanda</th>
                <th>Risposta</th>
                <th>Actions</th>
                
            </tr>
        @foreach($faqs as $faq)
            <tr>
                <td>{{$faq -> id}}</th>
                <td>{{$faq -> domanda}}</td>
                <td>{{$faq -> risposta}}</td>
                <td>
                    <div class="button-container">
                        <a href="{{route('faq.edit', $faq -> id)}}"><button class="b1">Modifica</button></a>
                            <form method="POST" action="{{route('faq.delete', ['id' => $faq -> id])}}" 
                                onclick="return confirm('Sei sicuro di voler cancellare questa FAQ ?') "  style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="b3">Elimina</button>
                            </form>
                    </div>
                </tr>
        @endforeach    
    </table>
</div>
<div class="pag">{{$faqs -> withQueryString()->links('pagination.paginator')}}</div>

<style>
.pag {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px; 
}

.button-container {
    display: flex;
    gap: 10px;
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

.button-container button {
    padding: 8px 12px;
    border: none;
    cursor: pointer;
    font-weight: bold;
    text-transform: uppercase;
    border-radius: 4px;
    transition: background-color 0.3s ease-in-out;
}

.button-container button.b1 {
    background-color: #3498db;
    color: white;
}

.button-container button.b3 {
    background-color: #e74c3c;
    color: white;
}

.button-container button:hover {
    filter: brightness(1.2);
}

    .ins {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    width:90%;
    margin-top: 3em;
}
.ins .insert-link{
    background-color: #006400; 
}

</style>
@endsection










