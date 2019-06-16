<?php $__env->startSection('content'); ?>

    <div>   
        <?php if(count($projects)>0): ?>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-group">
                    <div class="encapsule-card card">
                        <div class="card-body">
                                <div class="row float-right">                                        
                                        <div><a href="<?php echo e(route('editp', $project->id)); ?>" class="btn btn-success">Editer</a> </div> 
                                        <div><a href="<?php echo e(route('projecttask',$project->id)); ?>" class="btn btn-primary">Afficher</a></div>
                                        <div><a href="<?php echo e(route('archiver', $project->id)); ?>" class="btn btn-danger">Archiver</a></div> 
                                        <button class="btn float-right">
                                            Etat <span class="badge badge-primary"><?php echo e($project->etat); ?></span>
                                        </button>
                                    </div> 
                            <h4 class="card-title font-weight-bold"><?php echo e($project->nom); ?></h4>

                            <div class="card-text">
                                <blockquote class="blockquote">
                                    <p class="md-0"><?php echo e($project->description); ?></p>
                                    <footer class="blockquote-footer text-right">
                                            <p>Start: <?php echo e($project->date_debut); ?> End: <?php echo e($project->date_fin); ?></p>                                           
                                    </footer>
                                </blockquote>
                                <div class="float-right">
                                    <label for="file">Niveau de progression:</label>
                                    <progress id="file" max="100" value="70"> 70% </progress>
                                </div>
                            </div>
                            
                        </div>
                    </div>                   
                </div> 
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
        <?php endif; ?>

    </div>
        
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('base', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>