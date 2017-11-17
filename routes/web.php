<?php
use App\Product;


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

Route::get('actores', 'ActorController@listaActores');



Route::get('peliculas/buscar/{nombre}', 'MoviesController@buscarPorNombre');
Route::get('peliculas/{id}', 'MoviesController@showPelicula');

// entro por get para ver el formulario
Route::get('/agregarPelicula', 'MoviesController@agregarPelicula')->middleware('isAdmin');

// entro por POST para ver "Pelicula Agregada Exitosamente", como el action de mi form no apunta a nada, se dirige a la misma ruta, pero por POST
Route::post('/agregarPelicula', 'MoviesController@nuevaPelicula');

Route::get('peliculas', 'MoviesController@mostrarPeliculas')->name('todas_las_pelis');


// entro por get para ver el formulario de edicion
Route::get('editarPelicula/{id}', 'MoviesController@editform');

// entro por POST para ver "Pelicula Agregada Exitosamente", como el action de mi form no apunta a nada, se dirige a la misma ruta, pero por POST
Route::put('editarPelicula/{id}', 'MoviesController@edicionFinal')->name('edicionFinal');

Route::delete('borrarPeli/{id}', 'MoviesController@delete')->name('borrar');

Route::resource("movies", 'PeliculasController');



Route::get('ejemplo', 'EjemploController@ejemplo');

Route::get('formFoto', 'EjemploController@formFoto');
Route::post('formFoto', 'EjemploController@guardarFoto');



Route::get('test', function(){
		$products = App\Product::with('category')->get();
		dd( $products);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
