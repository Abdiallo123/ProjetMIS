<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Comment extends Model
{
   protected $fillable = ['titre', 'contenu','id_user','id_project'];

   public function projects()
	{
		return $this->belongsToMany('App\Models\Project');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
