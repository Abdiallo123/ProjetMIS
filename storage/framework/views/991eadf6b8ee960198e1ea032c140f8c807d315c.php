<?php $__env->startSection('content'); ?>



<div class="container-fluid dashboard-content ">
    <h3 class="text-primary mb-1">Historiques des actions</h3>
    <div class="table-responsive-sm">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="center">#</th>
                    <th>Utilisateur</th>
                    <th>Action</th>
                    <th class="right">Date et heure</th>                    
                </tr>
            </thead>
            <tbody>
                <?php if(count($logs)>0): ?>
                    <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="center"><?php echo e($log->id); ?></td>
                            <td class="left strong"><?php echo e($log->user_id); ?></td>
                            <td class="left"><?php echo e($log->action); ?></td>
                            <td class="right text-center"><?php echo e($log->created_at); ?></td>                                                                      
                        </tr>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>                                      
            </tbody>
        </table>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>