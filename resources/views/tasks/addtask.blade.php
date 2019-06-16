@extends('layouts.app')
@section('content')
<form action="{{route('storet',$project->id)}}" method="post">
    {{ csrf_field() }}
    <div class="card text-left">
      <div class="card-body">
        <h4 class="card-title" style="color: #3490dc;">Formulaire d'ajout d'une nouvelle tâche</h4>
        <div class="card-text">
            <div class="form-group">
                <label for="nom"></label>
                <input type="text" name="nom" id="" class="form-control" placeholder="Nom de la tache" aria-describedby="helpId">
            </div>
            <div class="form-group">
                  <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
                  {{$errors->first('description',':message')}}
            </div>
            <div class="row">
            <div class="form-group col-md-6">
              <input type="date" name="date_debut" id="" class="form-control" placeholder="Date de debut" aria-describedby="helpId">
            </div>
            <div class="form-group col-md-6">
              <input type="date" name="date_fin" id="" class="form-control" placeholder="Date de fin" aria-describedby="helpId">
            </div>
          </div>
            <div class="row">
              <div class="form-group col-md-6">                  
                    <label for="pourcentage">%</label>
                    <input type="number" name="pourcentage" id="" class="form-control" placeholder="Pourcentage sur le projet" aria-describedby="helpId">   
              </div> 
             
          <div class="form-group col-md-6">
            <label for="responsable">Responsable</label>
            <select name="responsable" id="" class="custom-select">
            {{--  @foreach ($users as $user)
              <option value="">{{$user->name}}</option>
             @endforeach  --}}
             <option value="">Diallo</option>
             <option value="">Mafouz</option>
             <option value="">Harouna</option>
            </select>
          </div>
        </div>   
              <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
      </div>
    </div>
    
    
</form>
@endsection