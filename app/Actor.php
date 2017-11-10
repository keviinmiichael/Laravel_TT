<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

	public function getNombreCompleto(){
		return $this->first_name . " " . $this->last_name;
	}


	// protected $table = 'actores';

	// protected $fillable = ['first_name', 'last_name', 'rating' ];



}
