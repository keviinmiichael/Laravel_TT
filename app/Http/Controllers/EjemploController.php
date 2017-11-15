<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{

	public function ejemplo(){
		$mascotas = collect([
			['Nombre' => 'Manolo',
			  'tipo' => 'perro'
		  ],
			['Nombre' => 'Floyd',
			  'tipo' => 'Gato'
		  ],
			['Nombre' => 'Kaiser',
			  'tipo' => 'Extraterrestre'
		  ],
			['Nombre' => 'Julian',
			  'tipo' => 'Aleman'
		  ]
	  ]);

	  // $keyMayorados = $mascotas->map(function ($item, $key){
		//   if ($key > 1) {
		//   	return $item;
		//   }
      //
	  // });

	  dd( $mascotas->shuffle());


	}

	public function formFoto(){
		return view ('formFoto');
	}

	public function guardarFoto(Request $request){
	// carpeta en la que voy a guardar la imagen
	$folder = "public";

	// Laravel usará un nombre al azar y nos lo dará en $path
	$path = $request->file("avatar")->storePublicly($folder);

	return view('formFoto');

	}
}
