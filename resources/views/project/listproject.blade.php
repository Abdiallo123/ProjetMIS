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
<<<<<<< HEAD
                        <a class="text-primary" href="{{route('project.show', $project)}}">Editer</a>
=======
                        <a href="{{route('projecttask',$project->id)}}">Editer</a>
>>>>>>> dec0dd3c36bd1a2cd6edefb96af7d3a891ee1d27
                        </div>
                    </div>
                </div> 
             @endforeach
                    
        @endif

    </div>
        
<<<<<<< HEAD
    <div class="card  col-md-10">
            
            <div class="card-body text-primary">
              <h5 class="card-title">Laisser un commentaire</h5>
              <div class="card-text">
                <form action="{{route('storec')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="titre" id="" class="form-control col-sm-10" placeholder="titre">
                        {{$errors->first('titre',':message')}}
                      </div>
                    <div class="form-group">
                      <input type="text" name="contenu" id="" class="form-control col-sm-10" placeholder="contenu">
                      {{$errors->first('contenu',':message')}}
                    </div>
                    <input type="submit" value="Commenter" class="btn btn-primary">
                </form>
              </div>
            </div>
    </div>
=======
    
>>>>>>> dec0dd3c36bd1a2cd6edefb96af7d3a891ee1d27
@endsection

