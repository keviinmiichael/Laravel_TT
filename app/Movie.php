<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Movie extends Model
{

	use SoftDeletes;
    protected $fillable = ['title', 'rating','awards','length', 'release_date'];


	protected $dates = ['deleted_at'];
}
