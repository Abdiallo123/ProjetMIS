<?php $__env->startSection('content'); ?>

<title><?php echo e($project->nom); ?></title>
<p><?php echo e($project->description); ?></p>

<div class="card">
        <div class="card-header">
            liste des tâches du projet
        </div>
        <div class="card-body">
            <p class="card-text text-primary">
                <a href="<?php echo e(route('addt',$project->id)); ?>" class="btn btn-primary">Nouvelle tâche</a>
                <?php if(count($tasks)>0): ?>
                    
                        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                <span><?php echo e($task->nom); ?></span>
                            </label>
                              </div>
                            <p><?php echo e($task->description); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                <?php endif; ?>
            </p>
        </div>
    </div>


   
    <div class="card  col-md-10">
            
            <div class="card-body text-primary">
              <h5 class="card-title">Laisser un commentaire</h5>
              <div class="card-text">
                <form action="<?php echo e(route('storec',$project->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <textarea class="form-control" name="contenu" id="" rows="3" placeholder="contenu"></textarea>
                        <?php echo e($errors->first('contenu',':message')); ?>

                      </div>
                    <input type="submit" value="Commenter" class="btn btn-primary">
                </form>
              </div>
              <?php if(count($comments)>0): ?>
              
              <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <p>
                    <?php echo e($comment->contenu); ?>

                  </p>
                  <p>
                    <?php echo e($comment->user); ?>

                  </p>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
              <?php endif; ?>
            </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>