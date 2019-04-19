@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">
        liste des tâches du projet
    </div>
    <div class="card-body">
        <h4 class="card-title">tache</h4>
        <p class="card-text">
            @if (count($tasks)>0)
                <ul>
                    @foreach ($tasks as $task)
                        <li>{{$task->nom}}</li>
                        <li>{{$task->description}}</li>
                        <li>{{$task->etat}}</li>
                    @endforeach
                </ul>
            @endif
        </p>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

@endsection