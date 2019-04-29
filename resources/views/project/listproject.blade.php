@extends('layouts.app')
@extends('base')
@section('content')

    <div>   
        @if (count($projects)>0)
            @foreach ($projects as $project)
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$project->nom}}</h4>
                            <div class="card-text">
                                <p>{{$project->description}}</p>
                                <p>{{$project->date_debut}}</p>
                                <p>{{$project->date_fin}}</p> 
                            </div>
                        <a href="{{route('projecttask',$project->id)}}">Editer</a>
                        </div>
                    </div>
                </div> 
             @endforeach
                    
        @endif

    </div>
        
    
@endsection

