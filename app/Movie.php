<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Movie extends Model
{

	use SoftDeletes;
    protected $fillable = ['title', 'rating','awards','length', 'release_date'];

	public function genre(){
		return $this->belongsTo(Genre::class, 'genre_id');
	}


	protected $dates = ['deleted_at'];
}
