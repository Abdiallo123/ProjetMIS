@extends('layouts.app')
@section('content')

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
            
                @if (count($projects)>0)
                    @foreach ($projects as $project)
                        <tr>
                        <td>{{$project->nom}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->date_debut}}</td>
                        <td>{{$project->date_fin}}</td> 
                        </tr>
                    @endforeach
                    
                @endif
                    
           
            
        </tbody>
    </table>

    </div>
<form action="{{route('storec')}}" method="POST">
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
@endsection