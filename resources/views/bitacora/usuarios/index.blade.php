@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de usuarios <a href="usuarios/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('bitacora.usuarios.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover ">
				<thead>
					<th>ID</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Opciones</th>
				</thead>
				@foreach($usuarios as $usu)
				<tr>
					<td>{{ $usu->id }}</td>
					<td>{{ $usu->name }}</td>
					<td>{{ $usu->email }}</td>
					<td>
						<a href="{{URL::action('UsuarioController@edit', $usu->id)}}"><div class="btn btn-info">Editar</div></a>
						<a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>				
					</td>
				</tr>
				@include('bitacora.usuarios.modal')
				@endforeach
			</table>
		</div>
		{{$usuarios->render()}}
	</div>
</div>
@endsection