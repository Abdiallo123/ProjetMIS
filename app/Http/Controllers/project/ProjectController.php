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
use Mail;

class ProjectController extends Controller
{
    //Fonction d'affichage de la liste de tous les projets

    public function index()
    {
        $projects = Project::where([
            ['status', '!=', 1],
            ['etat', '!=', 'Archivé'],                   
        ])->get();
            
        
        return view('project.listproject', compact('projects'));
    }

    // Fonction d'affichage du formulaire d'ajout

    public function create()
    {
        $users = User::all();
        return view('project.addproject', compact('users'));
    }

<<<<<<< HEAD
    
    public function store(Request $request,$id)
=======
    //fonction d'ajout d'un nouveau projet

    public function store(Request $request)
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
    {
        $etat = 'Actif';
        $niveau = 0;
       
       
        $this->validate($request, [
            'nom' => 'required',
            'description' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'client' => 'required',
<<<<<<< HEAD
            'type' => 'required'
        ]);

        $etat = 'Actif';
        $user = \Auth::id();
        
            
=======
            'contact' => 'required',
            'type' => 'required',
            'priorite' => 'required',
            'responsable' => 'required'
        ]);
       
        
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
        Project::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'contact' => $request->contact,
            'email' => $request->email,
            'responsable' => $request->responsable,
            'etat' => $etat,
            'type' => $request->type,
<<<<<<< HEAD
            //'id_user' => $project->$user,
=======
            'priorite' => $request->priorite,
            'niveau_avancement' => $niveau,
<<<<<<< HEAD
            'responsable' => $request->responsable
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
=======
            
>>>>>>> eb312757c98f5381f7dd73f85318d2ed041ad535
        ]);

        return back()->with('succes','projet ajouté avec succès');
    }

    //fonction d'affichage des utilisateurs
    public function showuser(){
        
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
        $allusers = User::all();
        $comments = Comment::where('project_id', '=', $id)->get();

        return view('project.show')->with([
            
            'project'=> $projects,
            'tasks'=> $tasks,
            'comments'=>$comments,
            'users' =>$iduser,
            'allusers'=>$allusers
         ]);

        
                  
    }

<<<<<<< HEAD
   
=======
    //fonction d'affichage du formulaire d'édition
    
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba
    public function edit(project $project, $id)
    {
        $projects = Project::find($id);
        $users = User::all();
        return view('project.edit', compact('projects', 'users'));
    }

    
<<<<<<< HEAD
    public function update(Request $request, $id )
    {
       
=======
    // fonction de modification d'un projet
>>>>>>> 47dab2173e78b124616b586469e0ab9c1bc70aba

    public function update(Request $request, $id )
    {       
        
           /*  $this->validate($request, [
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
        ]); */

    
        
        //dd('salut');
        Project::whereId($id)->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'contact' => $request->contact,
            'email' => $request->email,
            'etat' => $request->etat,
            'type' => $request->type,
            'priorite' => $request->priorite,
            'responsable' => $request->responsable
        ]);

        $users = User::select('email')->get()->pluck('email')->toArray(); 
        $to_name = 'Bella';
        $nom_destinataire = User::find('name');
        $data = array('name'=>$nom_destinataire, "body" => "un de vos projets a été modifié");
            
        Mail::send('emails.email', $data, function($message) use ($nom_destinataire, $users) {
            $message->to($users, $nom_destinataire)
                    ->subject('Artisans Web Testing Mail');
            $message->from('abdiallo@misgroupe.com','Artisans Web');
        });

        return back()->with('success', 'Modification réussie'); 
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
        $status = 1;
        $etat = 'Archivé';
        Project::whereId($id)->update([
            'status'=> $status,
            'etat' => $etat,
        ]);
        return redirect()->route('liste');
    }

    

    // fonction de restauration des données

    public function restaurer($id){
        $status = 0;
        $etat = 'En attente';
        
            Project::whereId($id)->update([
                'status'=> $status,
                'etat' => $etat,
            ]);

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

     //Liste des projets archivés

    public function listarchive(){
        $etat = 'Archivé';
        $projects = Project::whereEtat($etat)->get();
        return view('project.archive', compact('projects'));
    }
}
