@extends('layouts.app')

@section('content')




<div class="card">
        <div class="card-header">
            <title>{{$project->description}}</title>      
        </div>
        <div class="card-body">

            <div class="card-text">

              <div class="card">                
                <div class="card-body">
                    <a href="{{route('addt',$project->id)}}" class="btn btn-primary float-right">Nouvelle tâche</a>
                  <h4 class="card-title text-primary">Gestion des tâches du projet</h4>
                  
                  <div class="card-text">
                   
                    @if (count($tasks)>0)
                        
                            @foreach ($tasks as $task)
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                    <span>{{$task->nom}}</span>
                                </label>
                              </div>
                                <p>{{$task->description}}</p>
                            @endforeach
                    @endif
                  </div>
                </div>
              </div>
              <div class="card">
            
                  <div class="card-body border-top">
                    <h5 class="card-title">Laisser un commentaire</h5>
                    <div class="card-text">
                      <form action="{{route('storec',$project->id)}}" method="POST">
                          @csrf
                          <div class="form-group">
                              <textarea class="form-control" name="contenu" id="" rows="3" placeholder="contenu"></textarea>
                              {{$errors->first('contenu',':message')}}
                            </div>
                          <input type="submit" value="Commenter" class="btn btn-primary float-right">
                      </form>
                    </div>
                    @if (count($comments)>0)
                    
                    @foreach ($comments as $comment)
                        
                       
                            <small class="float-left text-primary">                        
                                {{$comment->user->name}}
                            </small><br>
                            <p>
                             {{$comment->contenu}}
                          </p>
                        
                    @endforeach
                        
                    @endif
                  </div>
          </div>  
            </div>
        </div>
    </div>


   
    

@endsection
