<?php $__env->startSection('content'); ?>

    <div>   
        <?php if(count($projects)>0): ?>
            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($project->nom); ?></h4>
                            <div class="card-text">
                                <p><?php echo e($project->description); ?></p>
                                <p><?php echo e($project->date_debut); ?></p>
                                <p><?php echo e($project->date_fin); ?></p> 
                            </div>
                            <div class="row">
                                <label for="">Opérations</label>
                                
                                <div><a href="" class="btn btn-success">Editer</a> </div> 
                                <div><a href="<?php echo e(route('projecttask',$project->id)); ?>" class="btn btn-primary">Afficher</a></div>
                                <div><a href="" class="btn btn-danger">Supprimer</a></div> 
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