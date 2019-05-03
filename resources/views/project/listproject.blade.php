@extends('layouts.app')
@extends('base')
@section('content')

    <div>   
        @if (count($projects)>0)
            @foreach ($projects as $project)
                <div class="card-group">
                    <div class="card">
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
                        <a class="text-primary" href="{{route('projecttask', $project->id)}}">Editer</a>
                        </div>
                    </div>
                </div> 
             @endforeach
                    
        @endif

    </div>
        
    
@endsection

