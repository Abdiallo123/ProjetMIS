<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  protected  $fillable = ['nom','description','date_debut','date_fin','client','etat','type'];
}
