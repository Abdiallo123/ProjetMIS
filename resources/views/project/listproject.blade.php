@extends('layouts.app')
@extends('base')
@section('content')

    <div>   
        @if (count($projects)>0)
            @foreach ($projects as $project)
                <div class="card-group">
                    <div class="encapsule-card card">
                        <div class="card-body">
                                <div class="row float-right">                                        
                                        <div><a href="{{route('editp', $project->id)}}" class="btn btn-success">Editer</a> </div> 
                                        <div><a href="{{route('projecttask',$project->id)}}" class="btn btn-primary">Afficher</a></div>
                                        <div><a href="{{route('archiver', $project->id)}}" class="btn btn-danger">Archiver</a></div> 
                                        <button class="btn float-right">
                                            Etat <span class="badge badge-primary">{{$project->etat}}</span>
                                        </button>
                                    </div> 
                            <h4 class="card-title font-weight-bold">{{$project->nom}}</h4>

                            <div class="card-text">
                                <blockquote class="blockquote">
                                    <p class="md-0">{{$project->description}}</p>
                                    <footer class="blockquote-footer text-right">
                                            <p>Start: {{$project->date_debut}} End: {{$project->date_fin}}</p>                                           
                                    </footer>
                                </blockquote>
                                <div class="float-right">
                                    <label for="file">Niveau de progression:</label>
                                    <progress id="file" max="100" value="70"> 70% </progress>
                                </div>
                            </div>
                            
                        </div>
                    </div>                   
                </div> 
             @endforeach
                    
        @endif

    </div>
        
    
@endsection

