<?php

namespace App;

use App\User;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
	protected $fillable = ['user_id', 'title', 'body', 'excerpt'];

    public function comments()
	{
	    return $this->hasMany('App\Comment');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
