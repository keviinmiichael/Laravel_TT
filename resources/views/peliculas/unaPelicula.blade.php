@extends('estructura_base')


@section('TITULO', 'una pelicula')


@section('content')
	<h1>{{$pelicula->title}}</h1>
	<ul style="list-style:none";>
		<li>Fecha de estreno: {{$pelicula->release_date}}</li>
		<li>Rating: {{$pelicula->rating}}</li>
	</ul>

@endsection
