<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

	public function getNombreCompleto(){
		return $this->first_name . " " . $this->last_name;
	}

	public function peliculas(){
		return $this->belongsToMany(Movie::class,'actor_movie','actor_id', 'movie_id' );
	}

	// protected $table = 'actores';

	// protected $fillable = ['first_name', 'last_name', 'rating' ];



}
