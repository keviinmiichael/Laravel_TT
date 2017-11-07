@extends('estructura_base')

@section('title', 'Vista De Peliculas' )


@section('content')
	@if (isset($result))
		{{ $result }}
	@endif

	@if (isset($peliculas))
	<h1>Lista de Peliculas</h1>
	<ul>
		@forelse ($peliculas as $key => $unaPelicula)
			<li>{{ $unaPelicula }}</li>
		@empty
			<h2>No hay peliculas</h2>
		@endforelse
	</ul>
	@endif
@endsection
