<?php

namespace App\Http\Controllers\project;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use App\Models\Comment;
use App\User;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
       

        return view('project.listproject', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.addproject');
    }

    
    public function store(Request $request,$id)
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
        $user = \Auth::id();
        
            
        Project::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'client' => $request->client,
            'etat' => $etat,
            'type' => $request->type,
            //'id_user' => $project->$user,
        ]);

        return redirect()->route('liste');
    }

   
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

   
    public function edit(project $project, $id)
    {
        $projects = Project::find($id);
        return view('project.edit', compact('projects'));
    }

    
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

    
    public function destroy(project $project)
    {
        //
    }

    public function filtre($etat){



        $projet = Project::WhereEtat($etat)->get();

        return view('project.listproject', compact('project'));

        
    }
}
