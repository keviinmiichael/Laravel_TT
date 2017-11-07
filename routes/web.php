<?php


Route::get('/', function () {
    return "<h1>BIENVENIDX!!!!</h1>";
});


Route::get('decimeTuNombre/{name}/{apellido?}', function ($name, $apellido = null) {

	if ($apellido === null) {
		return "Tu nombre es " . $name . " sin apellido";
	}else {
		return "Tu nombre es " . $name . " " .$apellido;
	}

});



Route::get('peliculas', 'MoviesController@mostrarPeliculas');
Route::get('peliculas/{nombre}', 'MoviesController@buscarPorNombre');

// entro por get para ver el formulario
Route::get('/agregarPelicula', 'MoviesController@agregarPelicula');

// entro por POST para ver "Pelicula Agregada Exitosamente", como el action de mi form no apunta a nada, se dirige a la misma ruta, pero por POST
Route::post('/agregarPelicula', 'MoviesController@nuevaPelicula');
