@extends('layout')
@section ('title', 'Crear Proyecto')
@section('content')
	<h1> Crear Nuevo Proyecto </h1>

	@include('partials/session-status')
	
	@include('partials.validation-errors')

	<form method="POST" action="{{ route('projects.store') }}">

		@include('projects._form', ['btnText' => 'Guardar'])
	</form>
@endsection