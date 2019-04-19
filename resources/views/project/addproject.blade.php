@extends('layouts.app')

@section('content')
    
    <div>
        <form class="container-fluid center-block" action="{{route('store')}}" method="POST">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-header primary">
                    <h3 class="mb-1">Add a new project form</h3>
                    <p>Please enter the project informations.</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="nom" required="" placeholder="Nom du projet" autocomplete="off">
                        {{$errors->first('nom', ':message')}}
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="description" required="" placeholder="Description" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pass1" type="date" required="" placeholder="Date debut" name="date_debut">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" required="" placeholder="Date fin" type="date" name="date_fin">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="client" required="" placeholder="Nom Client" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" required="" placeholder="Etat" type="text" name="etat">
                    </div>
                    <!-- <div class="form-group">
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="etat1" checked="" class="custom-control-input"><span class="custom-control-label">En cour</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="etat1" class="custom-control-input"><span class="custom-control-label">En attente</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="etat1" class="custom-control-input"><span class="custom-control-label">Archivé</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="etat1" class="custom-control-input"><span class="custom-control-label">suspendu</span>
                    </label>
                    <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="etat1" class="custom-control-input"><span class="custom-control-label">Clôturé</span>
                    </label>
                </div> -->
                <div class="form-group">
                        <input class="form-control form-control-lg" required="" placeholder="type" type="text" name="type">
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                    </div>
                    
            </div>
        </form>
    </div>

@endsection