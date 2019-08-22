<?php

namespace App\Http\Controllers\project;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Project;
use App\Models\Task;
use App\Models\Comment;
use App\Models\Archive;

use App\User;
use Auth;

class ProjectController extends Controller
{
    //Fonction d'affichage de la liste de tous les projets

    public function index()
    {
        $projects = Project::all();
       

        return view('project.listproject', compact('projects'));
    }

    // Fonction d'affichage du formulaire d'ajout

    public function create()
    {
        return view('project.addproject');
    }

<<<<<<< HEAD
    
    public function store(Request $request,$id)
=======
    //fonction d'ajout d'un nouveau projet

    public function store(Request $request)
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
    {
        
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'client' => 'required',
<<<<<<< HEAD
            'type' => 'required'
        ]);

        $etat = 'Actif';
        $user = \Auth::id();
        
            
=======
            'contact' => 'required',
            'responsable' => 'required',
            'type' => 'required',
            'priorite' => 'required'
            
        ]);
        dd('salut');
        $etat = 'Actif';
        $niveau = 0;
        
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
        Project::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'contact' => $request->contact,
            'etat' => $etat,
            'type' => $request->type,
<<<<<<< HEAD
            //'id_user' => $project->$user,
=======
            'priorite' => $request->priorite,
            'niveau_avancement' => $niveau,
            'responsable' => $request->responsable
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
        ]);

        return redirect()->route('liste');
    }

<<<<<<< HEAD
   
=======
    // Fonction de détails sur un projet
    
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
    public function show($id)
    {
        $projects = Project::find($id);
        $tasks = Task::where('project_id', '=', $id)->get();
        $iduser = Auth::id();
        $comments = Comment::where('project_id', '=', $id)->get();

        return view('project.show')->with([
            
            'project'=> $projects,
            'tasks'=> $tasks,
            'comments'=>$comments,
            'users' =>$iduser
         ]);

        
                  
    }

<<<<<<< HEAD
   
=======
    //fonction d'affichage du formulaire d'édition
    
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
    public function edit(project $project, $id)
    {
        $projects = Project::find($id);
        return view('project.edit', compact('projects'));
    }

    
<<<<<<< HEAD
    public function update(Request $request, $id )
    {
       
=======
    // fonction de modification d'un projet
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba

    public function update(Request $request, $id )
    {       
            $this->validate($request, [
            'nom' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'client' => 'required',
            'contact' => 'required',
            'etat' => 'required',
            'type' => 'required',
            'priorite' => 'required',
            'responsable' => 'required'
        ]);
        
        
        Project::whereId($id)->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'contact' => $request->contact,
            'etat' => $request->etat,
            'type' => $request->type,
            'priorite' => $request->priorite,
            'niveau_avancement' => $request->niveau_avancement,
            'responsable' => $request->responsable
        ]);

        return redirect()->route('projecttask',$id); 
    }

    
<<<<<<< HEAD
    public function destroy(project $project)
=======
    public function destroy(project $project, $id)
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
    {
        
    }

    //Fonction d'archivage des projets:

    public function archiver($id){
         
        $inserts = [];
        $projects = Project::find($id);

        $etat = 'Archivé';
            $inserts[] = [
                   'nom' => $projects->nom, 
                   'description' => $projects->description , 
                   'date_debut' => $projects->date_debut,
                   'date_fin' => $projects->date_fin,
                   'client' => $projects->client,
                   'contact' => $projects->contact,
                   'etat' => $etat,
                   'type' => $projects->type,
                   'priorite' => $projects->priorite,
                   'niveau_avancement' => $projects->niveau_avancement,
                   'responsable' => $projects->responsable

                ]; 

        DB::table('archives')->insert($inserts);

        Project::destroy($id);

        return redirect()->route('liste');
        
    }

    //Liste des projets archivés

    public function projetarchiver(){

       $projects = Archive::All();
        return view('project.archive', compact('projects'));
    }

    // fonction de restauration des données

    public function restaurer($id){

        $inserts = [];
        $projects = Archive::find($id);

        $etat = 'Actif';
            $inserts[] = [
                   'nom' => $projects->nom, 
                   'description' => $projects->description , 
                   'date_debut' => $projects->date_debut,
                   'date_fin' => $projects->date_fin,
                   'client' => $projects->client,
                   'contact' => $projects->contact,
                   'etat' => $etat,
                   'type' => $projects->type,
                   'priorite' => $projects->priorite,
                   'niveau_avancement' => $projects->niveau_avancement,
                   'responsable' => $projects->responsable
                ]; 

        DB::table('projects')->insert($inserts);

        Archive::destroy($id);

        return redirect()->route('liste');  
    }

    // fonction d'affichage des projets actifs

    public function actif(){

        $etat = 'Actif';
        $projects = Project::whereEtat($none)->get();

        return view('project.listproject', compact('projects'));
    }
    //fonction d'affichage des projects suspendus

    public function suspendu(){

        $etat = 'Suspendu';
        $projects = Project::whereEtat($etat)->get();

        return view('project.listproject', compact('projects'));
    }

    public function enattente(){

        $etat = "En attente";
        $projects = Project::whereEtat($etat)->get();

        return view('project.listproject', compact('projects'));
    }
}
