<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;

class Type extends Model
{
    protected $fillable = ['nom'];


    public function topics()
	{
		return $this->hasMany(Topic::class);
	}
}


