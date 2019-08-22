<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class RechercheController extends Controller
{
    public function recherche(Request $request)
    {
    	$topics = Topic::where('mot_cle', 'like', '%' . $request->mot_cle . '%')->get();

    	
		return view('topics.recherche', compact('topics'));
    }
}
