@extends('layouts.app')

@section('content')
    
    <div class="card">
    <form class="container-fluid"  action="{{route('updatep', $projects->id)}}" method="POST">
        @csrf
        
            <div>
               
                <div class="card-body">
                        <h4 class="card-title">Formulaire de modification d'un projet</h4>
                    <div class="card-text">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nom"  value="{{$projects->nom}}" placeholder="Nom du projet" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id=""  rows="3" placeholder="Description">{{$projects->description}}</textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input class="form-control" type="date" name="date_debut" value="{{$projects->date_debut}}" placeholder="Date debut">
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" value="{{$projects->date_fin}}" name="date_fin" placeholder="Date fin" type="date" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input class="form-control" type="text" name="client" value="{{$projects->client}}" placeholder="Nom Client" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" type="text" name="contact" value="{{$projects->contact}}" placeholder="Nom Client" autocomplete="off">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for=""> Responsable</label>
                            <select class="custom-select" name="responsable" id="">
                                @foreach ($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach 
                            </select>  
                        </div>
                        <div class="form-group col-md-6" style="margin-top:5;">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="Actif" name="etat" checked="" class="custom-control-input"><span class="custom-control-label">Actif</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="En attente" name="etat" class="custom-control-input"><span class="custom-control-label">En attente</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="Archiver" name="etat" class="custom-control-input"><span class="custom-control-label">Archivé</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="Suspendu" name="etat" class="custom-control-input"><span class="custom-control-label">suspendu</span>
                            </label>
                            
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                            <label for="type">Type de projet:</label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" checked="false" class="custom-control-input" value="Interne"><span class="custom-control-label">Interne</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" class="custom-control-input" value="Externe"><span class="custom-control-label">Externe</span>
                        </label>
                    </div>
                    <div class="form-group">
                            <label for="priorite">Priorité:</label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="priorite" class="custom-control-input"  value="P1" ><span class="custom-control-label">P1</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="priorite" class="custom-control-input"  value="P2"><span class="custom-control-label">P2</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="priorite" class="custom-control-input"  value="P3"><span class="custom-control-label">P3</span>
                        </label>
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Modifier</button>
                    </div>
                </div>    
            </div>
        </form>
    </div>

@endsection