<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['nom','description','etat','id_project'];

    public function projects()
	{
		return $this->belongsToMany('App\Models\Project');
	}
}
