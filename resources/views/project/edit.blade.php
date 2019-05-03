@extends('layouts.app')

@section('content')
    
    <div>
    <form class="container-fluid"  action="{{route('updatep', $projects->id)}}" method="POST">
        @csrf
        
            <div class="card">
                <div class="card-header primary">
                    <h3 class="mb-1">Modifier</h3>
                    <p>Please enter the project informations.</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="nom"  value="{{$projects->nom}}" placeholder="Nom du projet" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="description" value="{{$projects->description}}" placeholder="Description" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="date" name="date_debut" value="{{$projects->date_debut}}" placeholder="Date debut">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" value="{{$projects->date_fin}}" name="date_fin" placeholder="Date fin" type="date" >
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="client" value="{{$projects->client}}" placeholder="Nom Client" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" checked="" class="custom-control-input"><span class="custom-control-label">Actif</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">En attente</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">Archivé</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">suspendu</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">Clôturé</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" checked="false" class="custom-control-input"><span class="custom-control-label">Entreprise</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" class="custom-control-input"><span class="custom-control-label">Pour un client</span>
                        </label>
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                    </div>
                    
            </div>
        </form>
    </div>

@endsection