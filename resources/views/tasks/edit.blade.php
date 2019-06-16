@extends('layouts.app')
@section('content')
<form action="{{route('storet')}}" method="post">
    {{ csrf_field() }}
    <div class="card float-center">
      
      <div class="card-body">
        <h4 class="card-title">Formulaire de modification d'une tâche</h4>
        <div class="card-text">
            <div class="form-group">
                <label for="nom"></label>
                <input type="text" name="nom" id="" class="form-control" placeholder="Nom" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="description"></label>
                <input type="text" name="description" id="" class="form-control" placeholder="Description" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for=""></label>
                <input type="text" name="etat" id="" class="form-control" placeholder="Etat" aria-describedby="helpId">
              </div>
              <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
      </div>
    </div>
   
</form>
@endsection