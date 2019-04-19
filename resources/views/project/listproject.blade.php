@extends('layouts.app')
@section('content')

    <div class="<table class="table">
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
                    
                <td scope="row"></td>
                
                <td></td>
            </tr>
            
        </tbody>
    </table>">

    </div>

@endsection