<div class="col-sm-6">                                            
        <h3 class="text-primary mb-1">Opérations</h3>
                                                    
       <div class="row"> 
           
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModifprojectModal{{$project->id}}"> Editer</button>
            
            <!-- Modal  de modification d'un projet-->
            <div class="modal fade" id="ModifprojectModal{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Formulaire de modification d'un projet</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <form action="{{route('updatep', $project->id)}}" method="POST">
                                    @csrf
                                                   
                                        <div class="card-body">
                                            <div class="card-text">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="nom"  value="{{$project->nom}}" placeholder="Nom du projet" autocomplete="off">
                                                </div>
                                            
                                                <div class="form-group">
                                                    <textarea class="form-control" name="description" id=""  rows="3" placeholder="Description">{{$project->description}}</textarea>
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input class="form-control" type="date" name="date_debut" value="{{$project->date_debut}}" placeholder="Date debut">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input class="form-control" value="{{$project->date_fin}}" name="date_fin" placeholder="Date fin" type="date" >
                                                    </div>
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <input class="form-control" type="text" name="client" value="{{$project->client}}" placeholder="Nom Client" autocomplete="off">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input class="form-control" type="text" name="contact" value="{{$project->contact}}" placeholder="Nom Client" autocomplete="off">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <select class="custom-select" name="responsable" id="">
                                                            @foreach ($allusers as $alluser)
                                                                <option value="{{$alluser->id}}">{{$alluser->name}}</option>
                                                            @endforeach 
                                                        </select>  
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input class="form-control" type="text" name="email" value="{{$project->email}}" placeholder="Nom Client" autocomplete="off">
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                            <label for="type">Type de projet:</label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="type" checked="false" class="custom-control-input" value="Interne" {{$project->type == 'Interne' ? 'checked' : ''}}><span class="custom-control-label">Interne</span>
                                                        </label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="type" class="custom-control-input" value="Externe" {{$project->type == 'Externe' ? 'checked' : ''}}><span class="custom-control-label">Externe</span>
                                                        </label>
                                                    </div>
                                            
                                                    <div class="form-group col-md-6" style="margin-top:5;">
                                                            <label for="type">Etat du projet:</label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" value="Actif" name="etat" checked="" class="custom-control-input" {{$project->etat == 'Actif' ? 'checked' : ''}}><span class="custom-control-label">Actif</span>
                                                        </label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" value="En attente"  name="etat" class="custom-control-input" {{$project->etat == 'En attente' ? 'checked' : ''}}><span class="custom-control-label">En attente</span>
                                                        </label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" value="Suspendu" name="etat" class="custom-control-input" {{$project->etat == 'Suspendu' ? 'checked' : ''}}><span class="custom-control-label">suspendu</span>
                                                        </label>
                                                        
                                                    </div>
                                                
                                                </div>
                                            
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                            <label for="priorite">Priorité:</label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="priorite" class="custom-control-input"  value="P1" {{$project->priorite == 'P1' ? 'checked' : ''}}><span class="custom-control-label">P1</span>
                                                        </label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="priorite" class="custom-control-input"  value="P2" {{$project->priorite == 'P2' ? 'checked' : ''}}><span class="custom-control-label">P2</span>
                                                        </label>
                                                        <label class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" name="priorite" class="custom-control-input"  value="P3" {{$project->priorite == 'P3' ? 'checked' : ''}}><span class="custom-control-label">P3</span>
                                                        </label>
                                                    </div>
                                            
                                                </div>
                                                    
                                                <div class="form-group pt-2">
                                                    <button class="btn btn-block btn-primary float-right" type="submit">Modifier</button>
                                                </div>
                                            
                                            </div>                                                    
                                        </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
</div>
    













