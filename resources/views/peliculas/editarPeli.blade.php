@extends('estructura_base')

@section('content')
	{{-- al no tener action por defecto el post vuelve a la misma ruta  --}}
	<form id="agregarPelicula" action="{{route('edicionFinal', $pelicula)}}"  name="agregarPelicula" method="POST">
		{{-- Para que funcione el formulario debo SI O SI incluir el helper csrf_field() entre llaves, el cual me permite "crear" un token para tener permisos de acceder a mi proyecto por post --}}
		{{csrf_field()}}
		{{ method_field('PUT') }}

            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="title" id="titulo" value="{{old('title', $pelicula->title)}}"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" value="{{$pelicula->rating}}"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="premios" value="{{$pelicula->awards}}"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="length" id="duracion" value="{{$pelicula->length}}"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>

                    @for($i=1; $i < 32; $i++)
						@if ($i == old('dia'))
						<option selected value="{{$i}}">{{$i}}</option>
						@endif
                        <option value="{{$i}}">{{$i}}</option>
	                   @endfor
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
        </form>


		@if (count($errors) > 0)
			<ul style="color:red;">
			@foreach ($errors->all()  as $error)
				<li> {{$error}}  </li>
			@endforeach
			</ul>
		@endif


@endsection
