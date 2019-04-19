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

@endsection