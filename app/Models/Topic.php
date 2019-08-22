<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Type;
use App\User;

class Topic extends Model
{
    protected $fillable =['titre', 'type_id', 'contenu_lien', 'contenu_fichier','utilisateur_id', 'mot_cle'];


    public function types()
	{
		return $this->belongsTo(Type::class);
	}

	public function users()
	{
		return $this->belongsTo(User::class);
	}
}


