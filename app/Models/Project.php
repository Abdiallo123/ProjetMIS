<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Comment;
use App\Models\Task;

class Project extends Model
{
<<<<<<< HEAD
<<<<<<< HEAD
  protected  $fillable = ['nom','description','date_debut','date_fin','client','etat','type','id_user'];
=======
  protected  $fillable = ['nom','description','date_debut','date_fin','client','contact','type','priorite','responsable'];
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
=======
  protected  $fillable = ['nom','description','date_debut','date_fin','client','contact','email','etat','type','priorite','responsable','niveau_avancement'];
>>>>>>> eb312757c98f5381f7dd73f85318d2ed041ad535
 
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
