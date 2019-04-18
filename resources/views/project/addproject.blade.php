@extends('layouts.app')

@section('content')
    
    <div>
        <form class="container-fluid center-block">
            <div class="card">
                <div class="card-header primary">
                    <h3 class="mb-1">Add a new project form</h3>
                    <p>Please enter the project informations.</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="nom" required="" placeholder="Nom du projet" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="description" required="" placeholder="Description" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pass1" type="date" required="" placeholder="Date debut" name="datedebut">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" required="" placeholder="Date fin" type="date" name="datefin">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="client" required="" placeholder="Nom Client" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="radio-inline" checked="" class="custom-control-input"><span class="custom-control-label">En cour</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">En attente</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Archivé</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">suspendu</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Clôturé</span>
                    </label>
                </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                    </div>
                    
            </div>
        </form>
    </div>

@endsection