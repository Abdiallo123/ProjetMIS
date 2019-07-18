<?php $__env->startSection('content'); ?>



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
                    <h2 class="pt-2 d-inline-block"><?php echo e($project->nom); ?></h2>                            
                    <div class="float-right"> <h3 class="text-primary mb-0">Durée</h3>
                            Date debut: <?php echo e($project->date_debut); ?> <br> 
                            Date fin:   <?php echo e($project->date_fin); ?> 
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
                                            
                                            <div>Client: <?php echo e($project->client); ?></div>
                                            <div>Téléphone: <?php echo e($project->contact); ?></div>
                                            <div>Email: <?php echo e($project->email); ?></div>
                                            <div>Etat: <?php echo e($project->etat); ?></div>
                                            <div>Type: <?php echo e($project->type); ?></div>
                                            <div>Priorité: <?php echo e($project->priorite); ?></div>
                                            <div>Niveau d'avancement: <?php echo e($project->niveau_avancement); ?> %</div>
                                        </div> 
                                        <div class="col-sm-6">                                            
                                                <h3 class="text-primary mb-1">Opérations</h3>
                                                                                            
                                               <div class="row"> 
                                                   
                                                    <button type="button" class="btn btn-primary" style="width:91px; margin-top:5px;" data-toggle="modal" data-target="#ModifprojectModal<?php echo e($project->id); ?>"> Editer</button>
                                                    
                                                    <!-- Modal  de modification d'un projet-->
                                                    <div class="modal fade" id="ModifprojectModal<?php echo e($project->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                        <form action="<?php echo e(route('updatep', $project->id)); ?>" method="POST">
                                                                            <?php echo csrf_field(); ?>
                                                                                           
                                                                                <div class="card-body">
                                                                                    <div class="card-text">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" type="text" name="nom"  value="<?php echo e($project->nom); ?>" placeholder="Nom du projet" autocomplete="off">
                                                                                        </div>
                                                                                    
                                                                                        <div class="form-group">
                                                                                            <textarea class="form-control" name="description" id=""  rows="3" placeholder="Description"><?php echo e($project->description); ?></textarea>
                                                                                        </div>
                                                                                    
                                                                                        <div class="row">
                                                                                            <div class="form-group col-md-6">
                                                                                                <input class="form-control" type="date" name="date_debut" value="<?php echo e($project->date_debut); ?>" placeholder="Date debut">
                                                                                            </div>
                                                                                            <div class="form-group col-md-6">
                                                                                                <input class="form-control" value="<?php echo e($project->date_fin); ?>" name="date_fin" placeholder="Date fin" type="date" >
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                                        <div class="row">
                                                                                            <div class="form-group col-md-6">
                                                                                                <input class="form-control" type="text" name="client" value="<?php echo e($project->client); ?>" placeholder="Nom Client" autocomplete="off">
                                                                                            </div>
                                                                                            <div class="form-group col-md-6">
                                                                                                <input class="form-control" type="text" name="contact" value="<?php echo e($project->contact); ?>" placeholder="Nom Client" autocomplete="off">
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="row">
                                                                                            <div class="form-group col-md-6">
                                                                                                <select class="custom-select" name="responsable" id="">
                                                                                                    <?php $__currentLoopData = $allusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alluser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                        <option value="<?php echo e($alluser->id); ?>"><?php echo e($alluser->name); ?></option>
                                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                                                                                </select>  
                                                                                            </div>
                                                                                            <div class="form-group col-md-6">
                                                                                                <input class="form-control" type="text" name="email" value="<?php echo e($project->email); ?>" placeholder="Nom Client" autocomplete="off">
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="row">
                                                                                            <div class="form-group col-md-6">
                                                                                                    <label for="type">Type de projet:</label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" name="type" checked="false" class="custom-control-input" value="Interne" <?php echo e($project->type == 'Interne' ? 'checked' : ''); ?>><span class="custom-control-label">Interne</span>
                                                                                                </label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" name="type" class="custom-control-input" value="Externe" <?php echo e($project->type == 'Externe' ? 'checked' : ''); ?>><span class="custom-control-label">Externe</span>
                                                                                                </label>
                                                                                            </div>
                                                                                    
                                                                                            <div class="form-group col-md-6" style="margin-top:5;">
                                                                                                    <label for="type">Etat du projet:</label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" value="Actif" name="etat" checked="" class="custom-control-input" <?php echo e($project->etat == 'Actif' ? 'checked' : ''); ?>><span class="custom-control-label">Actif</span>
                                                                                                </label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" value="En attente"  name="etat" class="custom-control-input" <?php echo e($project->etat == 'En attente' ? 'checked' : ''); ?>><span class="custom-control-label">En attente</span>
                                                                                                </label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" value="Suspendu" name="etat" class="custom-control-input" <?php echo e($project->etat == 'Suspendu' ? 'checked' : ''); ?>><span class="custom-control-label">suspendu</span>
                                                                                                </label>
                                                                                                
                                                                                            </div>
                                                                                        
                                                                                        </div>
                                                                                    
                                                                                        <div class="row">
                                                                                            <div class="form-group col-md-6">
                                                                                                    <label for="priorite">Priorité:</label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" name="priorite" class="custom-control-input"  value="P1" <?php echo e($project->priorite == 'P1' ? 'checked' : ''); ?>><span class="custom-control-label">P1</span>
                                                                                                </label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" name="priorite" class="custom-control-input"  value="P2" <?php echo e($project->priorite == 'P2' ? 'checked' : ''); ?>><span class="custom-control-label">P2</span>
                                                                                                </label>
                                                                                                <label class="custom-control custom-radio custom-control-inline">
                                                                                                    <input type="radio" name="priorite" class="custom-control-input"  value="P3" <?php echo e($project->priorite == 'P3' ? 'checked' : ''); ?>><span class="custom-control-label">P3</span>
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
                                                    <a href="<?php echo e(route('archiver', $project->id)); ?>" class="btn btn-success" style="width:91px; margin-top:5px;">Archiver</a>
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
                                            <form action="<?php echo e(route('storet',$project->id)); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                <div class="card text-left">
                                                    <div class="card-body">                                                
                                                        <div class="card-text">
                                                            <div class="form-group">
                                                                <label for="nom"></label>
                                                                <input type="text" name="nom" id="" class="form-control" placeholder="Nom de la tache" aria-describedby="helpId">
                                                            </div>
                                                            <div class="form-group">
                                                                    <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
                                                                    <?php echo e($errors->first('description',':message')); ?>

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
                                                                        <?php $__currentLoopData = $allusers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alluser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($alluser->name); ?>"><?php echo e($alluser->name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
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
                                <?php if(count($tasks)>0): ?>
            
                                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="center"><?php echo e($task->id); ?></td>
                                            <td class="left strong"><?php echo e($task->nom); ?></td>
                                            <td class="left"><?php echo e($task->description); ?></td>
                                            <td class="right text-center"><?php echo e($task->pourcentage); ?></td>
                                            <td class="center"><?php echo e($task->date_debut); ?></td>
                                            <td class="right"><?php echo e($task->date_fin); ?></td>
                                            <td class="right"><?php echo e($task->responsable); ?></td>
                                        <td class="right"><a href="" data-toggle="modal" data-target="#modifiertask<?php echo e($task->id); ?>"
                                             class="btn  <?php echo e(($task->etat)=='Terminée' ? 'btn-success' : (($task->etat)=='En attente' ? 'btn-primary' : 'btn-warning')); ?>" 
                                             style="width:93px;" ><?php echo e($task->etat); ?></a></td>                                            
                                        </tr>  
                                  

                                    <!-- Modal -->
                                    <div id="modifiertask<?php echo e($task->id); ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                        <div class="modal-header">
                                                <h4 class="modal-title float-center">Modifier l'etat</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>                                            
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('updateetat', ['idt' => $task->id, 'idp' => $project->id ])); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php endif; ?>                                      
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card" style="margin-top: 2cm;">
    
                            <div class="card-body border-top">
                                <h3 class="card-title text-primary">Laisser un commentaire</h3>
                                <div class="card-text">
                                <form action="<?php echo e(route('storec',$project->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group">
                                        <textarea class="form-control" name="contenu" id="" rows="3" placeholder="contenu"></textarea>
                                        <?php echo e($errors->first('contenu',':message')); ?>

                                        </div>
                                    <input type="submit" value="Commenter" class="btn btn-primary float-right">
                                </form>
                                </div>
                                <?php if(count($comments)>0): ?>
                                
                                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       
                                    <p style="font-size:15px">
                                        <small class="float-left text-primary">                        
                                            <?php echo e($comment->user->name); ?>

                                        </small><br>
                                        <?php echo e($comment->contenu); ?>

                                    </p>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                <?php endif; ?>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>