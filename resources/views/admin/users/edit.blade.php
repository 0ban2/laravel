@extends('admin.template.main')

@section('titulo', 'Editar usuario' . $users->name)

@section('content')

{!! Form::open(['route' => 'users.update', 'method' => 'PUT']) !!}
<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', $users->name, ['class'=>'form-control', 'placeholder'=>'Nombre Completo', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', $users->email, ['class'=>'form-control', 'placeholder'=>'Nombre@Completo.com', 'required']) !!}
</div>
<div>
	{!! Form::label('type', 'Tipo de usuario: ') !!}
	{!! Form::select('type', [''=>'seleccione el tipo', 'usuario' => 'Miembro', 'administrador' => 'Administrador']) !!}
</div>
<div>
	{!!Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection