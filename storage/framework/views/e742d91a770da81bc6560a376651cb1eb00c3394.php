<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        liste des tâches du projet
    </div>
    <div class="card-body">
        <h4 class="card-title">tache</h4>
        <p class="card-text">
            <?php if(count($tasks)>0): ?>
                <ul>
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($task->nom); ?></li>
                        <li><?php echo e($task->description); ?></li>
                        <li><?php echo e($task->etat); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>
        </p>
    </div>
    <div class="card-footer text-muted">
        Footer
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>