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
                                            <h3 class="text-primary mb-1">Informations d'un projet</h3>
                                            
                                            <div>Client: {{$project->client}}</div>
                                            <div>Téléphone: {{$project->contact}}</div>
                                            <div>Email: info@gerald.com.pl</div>
                                            <div>Etat: {{$project->etat}}</div>
                                            <div>Type: {{$project->type}}</div>
                                            <div>Priorité: {{$project->priorite}}</div>
                                        </div>
                                        <div class="col-sm-6">                                            
                                            <h3 class="text-primary mb-1">Opérations</h3>
                                            
                                            <div><a href="{{route('editp', $project->id)}}" class="btn btn-primary" style="width:91px;">Editer</a> </div> 
                                            <div><a href="{{route('archiver', $project->id)}}" class="btn btn-primary" style="width:91px; margin-top:5px;">Archiver</a></div> 
                                        </div>
                                        
                                    </div>                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('addt',$project->id)}}" class="btn btn-primary float-right">Nouvelle tâche</a>
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
                                            <td class="right">{{$task->pourcentage}}</td>
                                            <td class="center">{{$task->date_debut}}</td>
                                            <td class="right">{{$task->date_fin}}</td>
                                            <td class="right">{{$task->responsable}}</td>
                                            <td class="right"><a href="" data-toggle="modal" data-target="#modifiertask" class="btn {{ ($task->etat)=='Terminée' ? 'btn-danger' : 'btn-warning'}}" style="width:91px;">{{$task->etat}}</a></td>                                            
                                        </tr>  
                                    @endforeach

                                    <!-- Modal -->
                                    <div id="modifiertask" class="modal fade" role="dialog">
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
                                                        <option value="En cours">En cours</option>
                                                        <option value="Terminée">Terminée</option>                                   
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