<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    protected $fillable = ['nom', 'description', 'date_debut', 'date_fin', 'client', 'contact', 'etat', 'type','priorite','responsable'];
}
