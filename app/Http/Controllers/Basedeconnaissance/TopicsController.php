<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TopicFormRequest;
use App\Models\Topic;
use App\Models\Type;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;



class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        $topics = Topic::paginate(5);
        return view('topics.index', compact('topics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('topics.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicFormRequest $request)
    {
        $file     = $request->file('contenu_fichier');

        if($file)
        {   
             $fileName = $file->getClientOriginalName();
             $path     = public_path('contenu_fichier');
             $file->move($path, $fileName);

        }else{

            $fileName = '';
        }
             $user = Auth::user();

            /* dd($user->id);*/

             Topic::create(['titre' => $request->titre, 'type_id' => $request->type, 'contenu_lien' => $request->contenu_lien, 'contenu_fichier' =>$fileName,'utilisateur_id' =>$user->id, 'mot_cle' => $request->mot_cle]);

              Flashy('Topic créer avec succès!');

             return redirect()->route('topics.index');     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Topic::destroy($id);
          Flashy()->error('Topic supprimé avec succès!');
        return redirect()->route('topics.index');
    }
}
