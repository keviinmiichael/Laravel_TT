@extends('estructura_base')

@section('TITULO', 'lista de peliculas')


@section('content')

		@foreach ($peliculas as $pelicula)
			<a href="peliculas/{{$pelicula->slug}}"><h2>{{$pelicula->title}} - @if ($pelicula->genre)
				{{$pelicula->genre->name}}
			@endif</h3></a>
				<a href="editarPelicula/{{$pelicula->slug}}">Editar!</a>

				<form class="" action="{{route('borrar', $pelicula)}}" method="post">
					{{csrf_field()}}
					{{ method_field('DELETE') }}

					<button type="submit" name="delete">x</button>


				</form>
		@endforeach
@endsection
