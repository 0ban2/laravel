@extends('admin.template.main')

@section('titulo', 'Crear usuario')

@section('content')

{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
<div class="form-group">
	{!! Form::label('name', 'Nombre') !!}
	{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre Completo', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Nombre@Completo.com', 'required']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Contraseña') !!}
	{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'********', 'required']) !!}
</div>
<div>
	{!! Form::label('type', 'Tipo de usuario: ') !!}
	{!! Form::select('type', [''=>'seleccione el tipo', 'usuario' => 'Miembro', 'administrador' => 'Administrador']) !!}
</div>
<div>
	{!!Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection