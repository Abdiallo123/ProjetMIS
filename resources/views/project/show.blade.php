@extends('layouts.app')

@section('content')

<title>{{$project->nom}}</title>
<p>{{$project->description}}</p>

<div class="card">
        <div class="card-header">
            liste des tâches du projet
        </div>
        <div class="card-body">
            <h4 class="card-title">tache</h4>
            <p class="card-text text-primary">
                @if (count($tasks)>0)
                    
                        @foreach ($tasks as $task)
                        <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                                  <span>{{$task->nom}}</span>
                                </label>
                              </div>
                            <p>{{$task->description}}</p>
                            <p>{{$task->etat}}</p>
                        @endforeach
                    
                @endif
            </p>
        </div>
    </div>


   
    <div class="card  col-md-10">
            
            <div class="card-body text-primary">
              <h5 class="card-title">Laisser un commentaire</h5>
              <div class="card-text">
                <form action="{{route('storec',$project->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="contenu" id="" class="form-control col-sm-10" placeholder="contenu">
                      {{$errors->first('contenu',':message')}}
                    </div>
                    <input type="submit" value="Commenter" class="btn btn-primary">
                </form>
              </div>
              @if (count($comments)>0)
              
              @foreach ($comments as $comment)
                  <p>{{$comment->contenu}}</p>
              @endforeach
                  
              @endif
            </div>
    </div>

@endsection