<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function listaActores(){
		$actores = Actor::all();

		return view('actores', compact('actores'));
	}
}
