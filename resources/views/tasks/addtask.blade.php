@extends('layouts.app')
@section('content')
<form action="{{route('storet',$project->id)}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="nom"></label>
      <input type="text" name="nom" id="" class="form-control" placeholder="Nom" aria-describedby="helpId">
      <small id="nomhelp" class="text-muted">Entrez le nom</small>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
        {{$errors->first('description',':message')}}
      </div>
    {{-- <div class="form-group">
      <label for=""></label>
      <input type="text" name="etat" id="" class="form-control" placeholder="Etat" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Etat de la tache</small>
    </div> --}}
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
@endsection