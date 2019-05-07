@extends('layouts.app')

@section('content')
    
    <div>
    <form class="container-fluid" method="POST" action="{{route('store')}}">
        {{ csrf_field() }}
            <div class="card">
                <div class="card-header primary">
                    <h3 class="mb-1">Ajouter un nouveau projet</h3>
                    <p>Veuillez entrer les informations du projet</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="nom" required="" placeholder="Nom du projet" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
                            {{$errors->first('description',':message')}}
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
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" checked="false" class="custom-control-input" value="MIS"><span class="custom-control-label">Entreprise</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" class="custom-control-input" value="Particulier"><span class="custom-control-label">Pour un client</span>
                        </label>
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                    </div>
                    
            </div>
        </form>
    </div>

@endsection