@extends('layout')
@section ('title', 'Crear Proyecto')
@section('content')
	<h1> Editar Proyecto </h1>
	
	@include('partials/session-status')	
	@include('partials.validation-errors')

	<form method="POST" action="{{ route('projects.update', $project) }}">
		@method('PATCH')
		@include('projects._form',  ['btnText' => 'Actualizar'])
	</form>
@endsection