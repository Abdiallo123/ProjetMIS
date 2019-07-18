<?php $__env->startSection('content'); ?>
    
<div class="container-fluid dashboard-content">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <div class="row">
                        <h2 class="pageheader-title">Ajouter un nouveau</h2>
                    </div>                        
                </div>
            </div>
        </div>
    <form class="container-fluid float-center" method="POST" action="<?php echo e(route('store')); ?>">
        <?php echo e(csrf_field()); ?>

            <div class="card">
                  
                <div class="card-body">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nom" required="" placeholder="Nom du projet" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
                               <p style="color:red; font-size:14px"> <?php echo e($errors->first('description',':message')); ?></p>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input class="form-control" name="date_debut" id="pass1" type="date" required="" placeholder="Date debut">
                                <?php echo e($errors->first('date_debut',':message')); ?>

                            </div>
                            <div class="form-group  col-md-6">
                                <input class="form-control" name="date_fin" required="" placeholder="Date fin" type="date">
                                <?php echo e($errors->first('date_fin',':message')); ?>

                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="client" required="" placeholder="Nom du Client" autocomplete="off">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">                               
                                <input class="form-control" type="text" name="email" required="" placeholder="Email du client" autocomplete="off">
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" type="text" name="contact" required="" placeholder="Contact du Client" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                                <label for=""> Responsable</label>
                                <select class="custom-select" name="responsable" id="">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                </select>  
                        </div>
                        <div class="row">  
                            <div class="form-group col-md-6">
                                <label for="type">Type de projet:</label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="Interne" name="type"  class="custom-control-input"><span class="custom-control-label">Interne</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="Externe" name="type" class="custom-control-input"><span class="custom-control-label">Externe</span>
                                </label>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="priorite">Priorité:  </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="P1" name="priorite"  class="custom-control-input"><span class="custom-control-label">P1</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="P2" name="priorite" class="custom-control-input"><span class="custom-control-label">P2</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" value="P3" name="priorite" class="custom-control-input"><span class="custom-control-label">P3</span>
                                </label>
                            </div>
                        </div>                         
                    
                        <div class="form-group pt-2">
                            <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                        </div>
                    </div>   
                </div>
            </div>    
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>