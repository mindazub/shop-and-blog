<?php

namespace App;

use APp\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $fillable =['user_id', 'post_id', 'body'];

   public function post()
	{
	    return $this->belongsTo('App\Post');
	}
}

