@extends('estructura_base')

@section('title', ' mi vista de actores')

@section('content')
	<ul>
		@foreach ($actores as $key => $actor)
			<li>{{$actor->getNombreCompleto()}}</li> - {{$actor->rating}}
		@endforeach
	</ul>
@endsection
