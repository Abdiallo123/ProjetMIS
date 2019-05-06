@extends('layouts.app')
@extends('base')
@section('content')

    <div>   
        @if (count($projects)>0)
            @foreach ($projects as $project)
                <div class="card-group">
                    <div class="card">
                        <div class="card text-center">
                          <div class="card-header">
                                <div class="row float-right">                                        
                                    <div><a href="{{route('editp', $project->id)}}" class="btn btn-success">Editer</a> </div> 
                                    <div><a href="{{route('projecttask',$project->id)}}" class="btn btn-primary">Afficher</a></div>
                                    <div><a href="{{route('add')}}" class="btn btn-danger">Supprimer</a></div> 
                                    <button class="btn float-right">
                                        Etat <span class="badge badge-primary">{{$project->etat}}</span>
                                    </button>
                                </div> 
                                
                          </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title font-weight-bold">{{$project->nom}}</h4>
                            <div class="card-text">
                                <blockquote class="blockquote">
                                    <p class="md-0">{{$project->description}}</p>
                                    <footer class="blockquote-footer text-right">
                                            <p>Start: {{$project->date_debut}} End: {{$project->date_fin}}</p>
                                           
                                    </footer>
                                </blockquote>
                                
                                 
                            </div>
                            
                        </div>
                    </div>                   
                </div> 
             @endforeach
                    
        @endif

    </div>
        
    
@endsection

