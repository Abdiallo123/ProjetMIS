<?php $__env->startSection('content'); ?>

    <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                            <a href="<?php echo e(route('add')); ?>" class="btn btn-primary float-right" style="margin-bottom: 5px;">Nouveau projet</a>                       
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
           <?php if(\Session::has('succes')): ?>
           <p class="text-success"> <?php echo e(\Session::get('succes')); ?></p>
               
           <?php endif; ?>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div>
                        <div>
                            <div class="row">
                                <?php if(count($projects)>0): ?>
                                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="card" style="min-height: 214px;max-height: 215px;">
                                                <div class="card-header">
                                                   <p class="font-weight-bold"><?php echo e($project->nom); ?> <span class="float-right"><?php echo e($project->niveau_avancement); ?>%</span></p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-text">                                                                                                             
                                                        <p><?php echo e($project->description); ?></p>
                                                    </div>
                                                    <a href="<?php echo e(route('projecttask',$project->id)); ?>" class="btn btn-primary float-right">Détails</a>
                                                </div>
                                                <div class="card-footer d-flex text-muted">
                                                       <p> Du <?php echo e($project->date_debut); ?> au <?php echo e($project->date_fin); ?></p>
                                                    </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>