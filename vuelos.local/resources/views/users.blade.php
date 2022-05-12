@extends('layouts/master')

@section ('titulo')Usuarios @stop

@section('contenido')
	<h1>Listado de todos los usuarios</h1>
	@foreach($users as $user)
		<p>{{ $user->name }}</p>
	@endforeach
@stop