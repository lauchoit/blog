@extends('admin.template.main');

@section('title')
	Categoria
@stop

@section('header')
	
@stop

@section('cabeceraArticle')
	<h4>Seccion de creacion de categoria</h4>
@stop

@section('cuerpoArticle')
	
	{!! Form::open(['route'=>'admin.category.store', 'method'=>'POST']) !!}

		<div class="form-group">
			{!! Form::label('title', 'Titulo', []) !!}
			{!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el titulo', 'required'=>'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@stop