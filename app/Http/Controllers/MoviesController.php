<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
	private $peliculas = [
		1 => "Toy Story",
		2 => "Buscando a Nemo",
		3 => "Avatar",
		4 => "Star Wars: Episodio V",
		5 => "Up",
		6 => "Mary and Max"
	];

    public function mostrarPeliculas(){
		$peliculas = $this->peliculas;
		$name = '<h1>asd</h1>';

		return view('peliculas/peliculas', compact('peliculas') );
	}

	public function buscarPorNombre($nombre) {
		foreach ($this->peliculas as $pelicula) {
			if ($nombre == $pelicula) {
				$result = $pelicula;
				break;
			} else {
				$result = "No hay peli con ese nombre";
			}
		}
		return view("peliculas/peliculas", compact('result'));
	}


// devuelvo la vista del formulario
	public function agregarPelicula(){
		return view('peliculas/agregarPelicula');
	}
// devuelvo la vista "Pelicula Agregada Exitosamente" cuando entro por post a /agregarPelicula
	public function nuevaPelicula(){
		return view('peliculas/nuevaPelicula');
	}
}
