<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Project;

class Comment extends Model
{
   protected $fillable = ['contenu'];

   public function projects()
	{
		return $this->belongsToMany(Project::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
