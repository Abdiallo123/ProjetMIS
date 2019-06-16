@extends('layouts.app')

@section('content')
    
<div>
    <form class="container-fluid float-center" method="POST" action="{{route('store')}}">
        {{ csrf_field() }}
            <div class="card">
                  
                <div class="card-body">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nom" required="" placeholder="Nom du projet" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
                                {{$errors->first('description',':message')}}
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input class="form-control" name="date_debut" id="pass1" type="date" required="" placeholder="Date debut">
                            </div>
                            <div class="form-group  col-md-6">
                                <input class="form-control" name="date_fin" required="" placeholder="Date fin" type="date">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="client" required="" placeholder="Nom du Client" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="contact" required="" placeholder="Contact du Client" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                                <label for=""> Responsable</label>
                                <select class="custom-select" name="responsable" id="">
                                    {{--  @foreach ($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach  --}}
                                    <option value="">Diallo</option>
                                    <option value="">Mafouz</option>
                                    <option value="">Harouna</option>
                                </select>  
                        </div>
                        <div class="row">  
                            <div class="form-group col-md-6">
                                <label for="type">Type d'entreprise:</label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="Interne" name="type"  class="custom-control-input"><span class="custom-control-label">Interne</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="Externe" name="type" class="custom-control-input"><span class="custom-control-label">Externe</span>
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="priorite">Priorité:  </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="P1" name="priorite"  class="custom-control-input"><span class="custom-control-label">P1</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="P2" name="priorite" class="custom-control-input"><span class="custom-control-label">P2</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="P3" name="priorite" class="custom-control-input"><span class="custom-control-label">P3</span>
                                </label>
                            </div>
                        </div>                         
                    
                        <div class="form-group pt-2">
                            <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                        </div>
                    </div>   
                </div>
            </div>    
    </form>
</div>

@endsection