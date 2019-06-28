@extends('layouts.app')

@section('content')

<div class="dashboard-wrapper">
    <div class="">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header p-4">
                            <a class="pt-2 d-inline-block" href="index.html">{{$project->nom}}</a>                            
                            <div class="float-right"> <h3 class="mb-0">Durée</h3>
                                Date debut: {{$project->date_debut}} <br>
                                Date fin: {{$project->date_fin}}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="card col-md-12">                
                                    <div class="card-body">
                                                                    
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-sm-6">                                            
                                                    <h3 class="text-dark mb-1">Caractéristiques</h3>
                                                    
                                                    <div>Client: {{$project->client}}</div>
                                                    <div>Téléphone: {{$project->contact}}</div>
                                                    <div>Email: info@gerald.com.pl</div>
                                                    <div>Etat: {{$project->etat}}</div>
                                                    <div>Type: {{$project->type}}</div>
                                                    <div>Priorité: {{$project->priorite}}</div>
                                                </div>
                                                
                                            </div>                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{route('addt',$project->id)}}" class="btn btn-primary float-right">Nouvelle tâche</a>
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
                                                    <td class="right"><a href="">{{$task->etat}}</a></td>
                                                </tr>  
                                            @endforeach
                                        @endif                                      
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-sm-5">
                                </div>
                                <div class="col-lg-4 col-sm-5 ml-auto">
                                    <table class="table table-clear">
                                        <tbody>
                                            <tr>
                                                <td class="left">
                                                    <strong class="text-dark">Subtotal</strong>
                                                </td>
                                                <td class="right">$28,809,00</td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong class="text-dark">Discount (20%)</strong>
                                                </td>
                                                <td class="right">$5,761,00</td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong class="text-dark">VAT (10%)</strong>
                                                </td>
                                                <td class="right">$2,304,00</td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                    <strong class="text-dark">Total</strong>
                                                </td>
                                                <td class="right">
                                                    <strong class="text-dark">$20,744,00</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card" style="margin-top: 2cm;">
            
                                    <div class="card-body border-top">
                                      <h5 class="card-title">Laisser un commentaire</h5>
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
                                          
                                         
                                              <small class="float-left text-primary">                        
                                                  {{$comment->user->name}}
                                              </small><br>
                                              <p>
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
    </div>
</div>                