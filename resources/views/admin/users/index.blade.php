@extends('admin.template.main')

@section('title', 'Lista de contenido')

@section('content')
<a class="btn btn-success" href="{{ route('users.create') }}">Crear Usuario</a>
<br/><hr/>
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">Id</th>
			<th scope="col">Nombre</th>
			<th scope="col">Email</th>
			<th scope="col">Tipo</th>
			<th scope="col">Acción</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<th scope="row">{{$user->id}}</th>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				@if($user->type == 'administrador')
				<span class="label label-success">{{$user->type}}</span>
				@else
				<span class="label label-info">{{$user->type}}</span>
				@endif
			</td>
			<td><a href="" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a><a href="{{ route('users.destroy', $user->id) }}" onclick = "return confirm('¿Seguro que desea eliminar este usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></a></td>
		</tr>
		@endforeach
	</tbody>
</table>
	{!! $users->render() !!}
@endsection