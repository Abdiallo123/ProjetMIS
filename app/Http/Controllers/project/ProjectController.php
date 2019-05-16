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

    //fonction d'ajout d'un nouveau projet

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'client' => 'required',
            'type' => 'required'
        ]);
        $etat = 'Actif';
        
        Project::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'etat' => $etat,
            'type' => $request->type
        ]);

        return redirect()->route('liste');
    }

    // Fonction de détails sur un projet
    
    public function show($id)
    {
        $projects = Project::find($id);
        $tasks = Task::where('id_project', '=', $id)->get();
        $iduser = Auth::id();
        $comments = Comment::where('id_project', '=', $id)->get();

        return view('project.show')->with([
            
            'project'=> $projects,
            'tasks'=> $tasks,
            'comments'=>$comments,
            'users' =>$iduser
         ]);

        
                  
    }

    //fonction d'affichage du formulaire d'édition
    
    public function edit(project $project, $id)
    {
        $projects = Project::find($id);
        return view('project.edit', compact('projects'));
    }

    
    // fonction de modification d'un projet

    public function update(Request $request, $id )
    {       
            $this->validate($request, [
            'nom' => 'required',
            'description' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'client' => 'required',
            'etat' => 'required',
            'type' => 'required'
        ]);
        
        
        
        Project::whereId($id)->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'etat' => $request->etat,
            'type' => $request->type
        ]);

        return redirect()->route('projecttask',$id); 
    }

    
    public function destroy(project $project, $id)
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
                   'etat' => $etat,
                   'type' => $projects->type
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
                   'etat' => $etat,
                   'type' => $projects->type
                ]; 

        DB::table('projects')->insert($inserts);

        Archive::destroy($id);

        return redirect()->route('liste');  
    }

    // fonction d'affichage des projets actifs

    public function actif(){

        $etat = 'Actif';
        $projects = Project::whereEtat($etat)->get();

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
