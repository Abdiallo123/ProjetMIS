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
                                            <h3 class="text-primary mb-1">Informations d'un projet</h3>
                                            
                                            <div>Client: <?php echo e($project->client); ?></div>
                                            <div>Téléphone: <?php echo e($project->contact); ?></div>
                                            <div>Email: info@gerald.com.pl</div>
                                            <div>Etat: <?php echo e($project->etat); ?></div>
                                            <div>Type: <?php echo e($project->type); ?></div>
                                            <div>Priorité: <?php echo e($project->priorite); ?></div>
                                        </div>
                                        <div class="col-sm-6">                                            
                                            <h3 class="text-primary mb-1">Opérations</h3>
                                            
                                            <div><a href="<?php echo e(route('editp', $project->id)); ?>" class="btn btn-primary" style="width:91px;">Editer</a> </div> 
                                            <div><a href="<?php echo e(route('archiver', $project->id)); ?>" class="btn btn-primary" style="width:91px; margin-top:5px;">Archiver</a></div> 
                                        </div>
                                        
                                    </div>                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo e(route('addt',$project->id)); ?>" class="btn btn-primary float-right">Nouvelle tâche</a>
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
                                            <td class="right"><?php echo e($task->pourcentage); ?></td>
                                            <td class="center"><?php echo e($task->date_debut); ?></td>
                                            <td class="right"><?php echo e($task->date_fin); ?></td>
                                            <td class="right"><?php echo e($task->responsable); ?></td>
                                            <td class="right"><a href="" data-toggle="modal" data-target="#modifiertask" class="btn <?php echo e(($task->etat)=='Terminée' ? 'btn-danger' : 'btn-warning'); ?>" style="width:91px;"><?php echo e($task->etat); ?></a></td>                                            
                                        </tr>  
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                                        <form action="<?php echo e(route('updateetat', ['idt' => $task->id, 'idp' => $project->id ])); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
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