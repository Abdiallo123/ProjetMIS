<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $fillable = ['titre', 'contenu'];

   public function projects()
	{
		return $this->belongsToMany('App\Models\Project');
	}
}
