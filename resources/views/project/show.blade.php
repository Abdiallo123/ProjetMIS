@extends('layouts.app')

@section('content')



<div class="container-fluid dashboard-content ">
    <!-- ============================================================== -->
    <!-- pageheader  -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header p-4">
                    <h2 class="pt-2 d-inline-block">{{$project->nom}}</h2>                            
                    <div class="float-right"> <h3 class="text-primary mb-0">Durée</h3>
                            Date debut: {{$project->date_debut}} <br> 
                            Date fin:   {{$project->date_fin}} 
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="card col-md-12">                
                            <div class="card-body">
                                                            
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-sm-6">                                            
                                            <h3 class="text-primary mb-1">Informations</h3>
                                            
                                            <div>Client: {{$project->client}}</div>
                                            <div>Téléphone: {{$project->contact}}</div>
                                            <div>Email: {{$project->email}}</div>
                                            <div>Etat: {{$project->etat}}</div>
                                            <div>Type: {{$project->type}}</div>
                                            <div>Priorité: {{$project->priorite}}</div>
                                            <div>Niveau d'avancement: {{$project->niveau_avancement}} %</div>
                                        </div> 
                                        <div class="col-sm-6">                                            
                                                <h3 class="text-primary mb-1">Opérations</h3>
                                                                                            
                                               <div class="row"> 
                                                   
                                                    <button type="button" class="btn btn-primary" style="width:91px; margin-top:5px;" data-toggle="modal" data-target="#ModifprojectModal{{$project->id}}"> Editer</button>
                                                    
                                                    <!-- Modal  de modification d'un projet-->
                                                    <div class="modal fade" id="ModifprojectModal{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title text-center" id="exampleModalLabel">Formulaire de modification d'un projet</h5>
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
                                                
                                                <div class="row">
                                                    <a href="{{route('archiver', $project->id)}}" class="btn btn-success" style="width:91px; margin-top:5px;">Archiver</a>
                                                </div> 

                                        </div>
                                    </div>                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary float-right" data-toggle="modal" style="margin-bottom:5px;" data-target="#ModaladdTask">Nouvelle tâche</button>

<!-- Modal d'Ajout d'une nouvelle tache -->
                            <div class="modal fade" id="ModaladdTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Formulaire d'ajout d'une nouvelle tâche</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('storet',$project->id)}}" method="post">
                                                {{ csrf_field() }}
                                                <div class="card text-left">
                                                    <div class="card-body">                                                
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
                                                                    <input type="number" name="pourcentage" id="" class="form-control" placeholder="Pourcentage" aria-describedby="helpId">   
                                                                </div> 
                                                                
                                                                <div class="form-group col-md-6">
                                                                    <label for="responsable">Responsable</label>
                                                                    <select name="responsable" id="" class="custom-select">
                                                                        @foreach ($allusers as $alluser)
                                                                            <option value="{{$alluser->name}}">{{$alluser->name}}</option>
                                                                        @endforeach 
                                                                    </select>
                                                                </div>
                                                            
                                                            </div>   
                                                            <button type="submit" class="btn btn-primary float-right">Ajouter</button>
                                                        </div>
                                                    </div>
                                                </div>                                                                                            
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>



                    <h3 class="text-primary mb-1">Liste des tâches</h3>
                    <div class="table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="center">#</th>
                                    <th>Nom</th>
                                    <th>Description</th>
                                    <th class="right">Pourcentage</th>
                                    <th class="center">Date debut</th>
                                    <th class="right">Date fin</th>
                                    <th class="right">Responsable</th>
                                    <th class="right">Etat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($tasks)>0)
            
                                    @foreach ($tasks as $task)
                                        <tr>
                                            <td class="center">{{$task->id}}</td>
                                            <td class="left strong">{{$task->nom}}</td>
                                            <td class="left">{{$task->description}}</td>
                                            <td class="right text-center">{{$task->pourcentage}}</td>
                                            <td class="center">{{$task->date_debut}}</td>
                                            <td class="right">{{$task->date_fin}}</td>
                                            <td class="right">{{$task->responsable}}</td>
                                        <td class="right"><a href="" data-toggle="modal" data-target="#modifiertask{{$task->id}}"
                                             class="btn  {{ ($task->etat)=='Terminée' ? 'btn-success' : (($task->etat)=='En attente' ? 'btn-primary' : 'btn-warning')
                                             }}" 
                                             style="width:93px;" >{{$task->etat}}</a></td>                                            
                                        </tr>  
                                  

                                    <!-- Modal -->
                                    <div id="modifiertask{{$task->id}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        <div class="modal-header">
                                                <h4 class="modal-title float-center">Modifier l'etat</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>                                            
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('updateetat', ['idt' => $task->id, 'idp' => $project->id ])}}" method="POST">
                                                @csrf
                                                <select class="custom-select" name="etat" id="">
                                                        <option value="Terminée" name="etat">En attente</option>                                                                      
                                                        <option value="En cours" name="etat" >En cours</option>
                                                        <option value="Terminée" name="etat">Terminée</option>                                   
                                                </select>
                                                <div class="form-group">
                                                    <button class="btn  btn-primary float-right" style="margin-top:5px;" type="submit">Modifier</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>

                                    </div>
                                    </div>
                                    @endforeach
                                 @endif                                      
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card" style="margin-top: 2cm;">
    
                            <div class="card-body border-top">
                                <h3 class="card-title text-primary">Laisser un commentaire</h3>
                                <div class="card-text">
                                <form action="{{route('storec',$project->id)}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control" name="contenu" id="" rows="3" placeholder="contenu"></textarea>
                                        {{$errors->first('contenu',':message')}}
                                        </div>
                                    <input type="submit" value="Commenter" class="btn btn-primary float-right">
                                </form>
                                </div>
                                @if (count($comments)>0)
                                
                                @foreach ($comments as $comment)
                                       
                                    <p style="font-size:15px">
                                        <small class="float-left text-primary">                        
                                            {{$comment->user->name}}
                                        </small><br>
                                        {{$comment->contenu}}
                                    </p>
                                    
                                @endforeach
                                    
                                @endif
                            </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection