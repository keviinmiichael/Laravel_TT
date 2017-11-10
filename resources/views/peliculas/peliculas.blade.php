@extends('estructura_base')

@section('TITULO', 'lista de peliculas')


@section('content')

		@foreach ($peliculas as $pelicula)
			<a href="peliculas/{{$pelicula->id}}"><h2>{{$pelicula->title}}</h3></a>
				<a href="editarPelicula/{{$pelicula->id}}">Editar!</a>

				<form class="" action="{{route('borrar', $pelicula)}}" method="post">
					{{csrf_field()}}
					{{ method_field('DELETE') }}

					<button type="submit" name="delete">x</button>


				</form>
		@endforeach
@endsection
