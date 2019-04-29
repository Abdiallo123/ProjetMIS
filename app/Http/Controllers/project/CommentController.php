<?php

namespace App\Http\Controllers\project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

<<<<<<< HEAD
=======




>>>>>>> e0eb0d53860bc21119931128b87edf403ef0f7a1
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        //
=======
        $comments = Comment::All();
        return view('project.comment', compact('comments'));
>>>>>>> e0eb0d53860bc21119931128b87edf403ef0f7a1
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        //
=======
        return view('project.listproject');
>>>>>>> e0eb0d53860bc21119931128b87edf403ef0f7a1
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $this->validate($request,[
            'titre'=> 'required|min:5',
            'contenu' => 'required|min:8'
        ]);

        Comment::create([
            'titre'=> $request->titre,
            'contenu' => $request->contenu
        ]);

        return redirect()->route('liste');
=======

            $this->validate($request,[
                'titre'=> 'required|min:5',
                'contenu' => 'required|min:8'
            ]);
    
            Comment::create([
                'titre'=> $request->titre,
                'contenu' => $request->contenu
            ]);
    
            return redirect()->route('liste');;
        
>>>>>>> e0eb0d53860bc21119931128b87edf403ef0f7a1
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< HEAD
        //
=======
        
>>>>>>> e0eb0d53860bc21119931128b87edf403ef0f7a1
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
        //
    }
}
