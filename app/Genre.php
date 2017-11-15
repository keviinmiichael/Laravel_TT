<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function peliculas(){
		return $this->hasMany(Movie::class, 'genre_id');
	}
}
