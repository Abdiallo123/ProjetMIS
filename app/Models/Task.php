<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\User;

class Task extends Model
{
    protected $fillable = ['nom','description','etat','date_debut','date_fin','pourcentage','responsable'];

    public function projects()
	{
		return $this->belongsToMany(Project::class);
	}

	public function users()
	{
		return $this->belongsTo(User::class);
	}
}
