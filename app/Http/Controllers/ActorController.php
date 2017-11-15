<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function listaActores(){
		$actores = Actor::paginate(4);

		return view('actores', compact('actores'));
	}
}
