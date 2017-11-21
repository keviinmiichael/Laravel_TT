<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;


class Movie extends Model
{

	use SoftDeletes;
	use Sluggable;

	public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $fillable = ['title', 'rating','awards','length', 'release_date'];

	public function genre(){
		return $this->belongsTo(Genre::class, 'genre_id');
	}


	protected $dates = ['deleted_at'];

	public function getRouteKeyName()
    {
        return 'slug';
    }
}
