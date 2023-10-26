@extends('layouts.staff')
@section('title', 'Lista Auto')
@section('content')

    @if(session('success'))
        <div class="alert alert-success" id="success">
            {{ session('success') }}
        </div>
    @endif


<a href="{{route('staff')}}" class="back-btn">Area Staff</a>
    <div class="ins">
        <a href="{{route('auto.create')}}" class="insert-link">Nuova Auto</a>
    </div>
    
    <div class="crud-container">
    <h2>Lista Auto</h2>
    <table>
            <tr>
                <th>Id</th>
                <th>Marca</th>
                <th>Modello</th>
                <th>Targa</th>
                <th>Allestimento</th>
                <th>Numero posti</th>
                <th>Prezzo Nolleggio Giornaliero </th>
                <th>Data inizio nollegio</th>
                <th>Data fine nollegio</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        @foreach($autos as $auto)
            <tr>
                <td>{{$auto -> idAuto}}</th>
                <td>{{$auto -> marca}}</td>
                <td>{{$auto -> modello}}</td>
                <td>{{$auto -> targa}}</td>
                <td>{{$auto -> allestimento}}</td>
                <td>{{$auto -> numero_posti}}</td>
                <td>{{$auto -> prezzo_n_g}}</td>
                <td>{{ date('d-m-Y', strtotime($auto -> data_inizio)) }}</td>
                <td>{{date('d-m-Y', strtotime($auto -> data_fine))}}</td>
                <td>{{$auto -> image}}</td>
            <td>
                <div class="button-container">
                    <a href="{{route('auto.edit',['idAuto' => $auto->idAuto])}}"><button class="b1">Modifica</button></a>
                   
                    <a href="{{ route('auto.show', ['idAuto' => $auto->idAuto]) }}"><button class="b2">Visualizza</button></a>
                    
                    <form action="{{route('auto.delete',[$auto -> idAuto])}}"
                                    onclick="return confirm('Sei sicuro di voler cancellare l\'auto ?') " method="POST">
                                    <button  type="submit" class="b3">Elimina</button>
                                    @method('DELETE')
                                    @csrf 
                    </form>
                </div>
            </td>
            </tr>
         @endforeach
    </table>
</div>
<div class="pag">{{$autos -> withQueryString()->links('pagination.paginator')}}</div>
<style>
    #success {
	position: fixed;
	top: 10%;
	left: 50%;
	transform: translate(-50%, -50%);
	z-index: 9999;
	background-color: #28a745;
	color: #fff;
	padding: 10px 20px;
	border-radius: 4px;
	box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
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