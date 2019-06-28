<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\Project;
use App\User;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.listetask', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $project = Project::find($id);
        $users = User::all();
        return view('tasks.addtask')->with('project', $project)->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $project_id)
    {

        $projects = Project::find($project_id);    
        $etat = 'encours';
        
        /* $this->validate($request, [
            'nom' =>'required',
            'description' => 'required',
            'etat' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'pourcentage' => 'required',
            'responsable' => 'required'
        ]); */ 
        
        Task::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'etat' => $etat,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'pourcentage' => $request->pourcentage,
            'responsable' => $request->responsable,
            'project_id' => $projects->id
        ]);
        return redirect()->route('projecttask',$project_id);
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
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idt, $idp)
    {
        $niveau = 0;
        $pourcentage = Task::get('pourcentage')->whereId($idt);
        //dd($pourcentage);
        $niveau = $niveau + $pourcentage;

        Project::whereId($idp)->update([
            'niveau_avancement' =>$niveau
        ]);
        
        Task::whereId($idt)->update([
            'etat' => $request->etat
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
