<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
	// private $peliculas = [
	// 	1 => "Toy Story",
	// 	2 => "Buscando a Nemo",
	// 	3 => "Avatar",
	// 	4 => "Star Wars: Episodio V",
	// 	5 => "Up",
	// 	6 => "Mary and Max"
	// ];

    public function mostrarPeliculas(){
		$peliculas = Movie::all();
		return view('peliculas.peliculas', compact('peliculas'));
	}

	public function showPelicula($id){
		$pelicula = Movie::find($id);

		return view('peliculas.unaPelicula', compact('pelicula'));
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
// valido	creo la peli y la guardo
public function nuevaPelicula(Request $request){

		$this->validate($request,
			[
				'title' => 'required|unique:movies',
				'rating' => 'required|numeric|between:1,10',
				'awards' => 'required',
				'length' => 'required',
				'dia' => 'required',
				"mes" => 'required',
				"anio" => 'required'
			],
			[
				'title.required' => 'el campo titulo es requerido',
				'rating.required' => 'el campo rating es requerido',
				'rating.numeric' => 'el campo rating deben ser solo numeros'
			]
		);

		$pelicula = new Movie($request->all());
		$release_date = $request->input('anio').'-'.$request->input('mes').'-'.$request->input('dia');

		$pelicula->release_date = date('Y-m-d', strtotime($release_date));
		$pelicula->save();

		return redirect()->route('todas_las_pelis');
	}


	public function editform($id){
		$pelicula = Movie::find($id);

		return view('peliculas/editarPeli', compact('pelicula'));

	}

	public function edicionFinal($id,Request $request){

		$this->validate($request,
			[
				'title' => 'required|unique:movies',
				'rating' => 'required|numeric|between:1,10',
				'awards' => 'required',
				'length' => 'required',
				'dia' => 'required',
				"mes" => 'required',
				"anio" => 'required'
			],
			[
				'title.required' => 'el campo titulo es requerido',
				'rating.required' => 'el campo rating es requerido',
				'rating.numeric' => 'el campo rating deben ser solo numeros'
			]
		);

		$pelicula = Movie::find($id);

		$pelicula->fill($request->all());

		$pelicula->save();

		return redirect()->route('todas_las_pelis');


	}


	public function delete($id){

		$pelicula = Movie::find($id);

		$pelicula->delete();
		
		return redirect()->route('todas_las_pelis');

	}
}
