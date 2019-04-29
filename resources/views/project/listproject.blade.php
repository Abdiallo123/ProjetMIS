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