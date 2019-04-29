<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected  $fillable = ['nom','description','date_debut','date_fin','client','etat','type'];
 
  public function Tasks()
	{
		return $this->hasMany('App\Models\Task');
  }
  
  public function comment()
	{
		return $this->hasMany('App\Models\Comment');
	}
}
