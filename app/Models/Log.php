<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Log extends Model
{
    protected $fillable = ['user_id', 'action', 'date'];


    public function users()
	{
		return $this->belongsToMany(User::class);
	}
    
}
