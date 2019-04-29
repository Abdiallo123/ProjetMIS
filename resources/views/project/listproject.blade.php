@extends('layouts.app')
@extends('base')
@section('content')

<<<<<<< HEAD
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
                        </div>
                    </div>
                </div> 
             @endforeach
                    
        @endif

    </div>
        
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
@endsection

=======


    <div>
    <table>
        <thead>
            <tr>
                <th>nom</th>
                <th>description</th>
                <th>date debut</th>
                <th>date fin</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @if (count($projects)>0)
                    @foreach ($projects as $project)
                    <td>{{$project->nom}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->datedebut}}</td>
                    <td>{{$project->datefin}}</td> 

                    @endforeach
                    
                @endif
                    
           
            
        </tbody>
    </table>
    <form action="{{route('storec')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="titre" id="" class="form-control" placeholder="titre">
            {{$errors->first('titre',':message')}}
          </div>
        <div class="form-group">
          <input type="text" name="contenu" id="" class="form-control" placeholder="contenu">
          {{$errors->first('contenu',':message')}}
        </div>
        <input type="submit" value="Commenter">
    </form>
    
    </div>
@endsection
>>>>>>> e0eb0d53860bc21119931128b87edf403ef0f7a1
