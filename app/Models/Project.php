<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Comment;
use App\Models\Tasks;

class Project extends Model
{
  protected  $fillable = ['nom','description','date_debut','date_fin','client','contact','email','etat','type','priorite','responsable','niveau_avancement'];
 
  public function Tasks()
	{
		return $this->hasMany(Task::class);
  }
  
  public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function users()
	{
		return $this->belongsToMany(User::class);
	}
}
