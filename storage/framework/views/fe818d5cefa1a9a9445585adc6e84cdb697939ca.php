<?php $__env->startSection('content'); ?>
    
    <div class="card">
    <form class="container-fluid"  action="<?php echo e(route('updatep', $projects->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
            <div>
               
                <div class="card-body">
                        <h4 class="card-title">Formulaire de modification d'un projet</h4>
                    <div class="card-text">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nom"  value="<?php echo e($projects->nom); ?>" placeholder="Nom du projet" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id=""  rows="3" placeholder="Description"><?php echo e($projects->description); ?></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input class="form-control" type="date" name="date_debut" value="<?php echo e($projects->date_debut); ?>" placeholder="Date debut">
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" value="<?php echo e($projects->date_fin); ?>" name="date_fin" placeholder="Date fin" type="date" >
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input class="form-control" type="text" name="client" value="<?php echo e($projects->client); ?>" placeholder="Nom Client" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" type="text" name="contact" value="<?php echo e($projects->contact); ?>" placeholder="Nom Client" autocomplete="off">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                            <select class="custom-select" name="responsable" id="">
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            </select>  
                        </div>
                        <div class="form-group col-md-6">
                            <input class="form-control" type="text" name="email" value="<?php echo e($projects->email); ?>" placeholder="Nom Client" autocomplete="off">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="form-group col-md-6">
                                <label for="type">Type de projet:</label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="type" checked="false" class="custom-control-input" value="Interne" <?php echo e($projects->type == 'Interne' ? 'checked' : ''); ?>><span class="custom-control-label">Interne</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="type" class="custom-control-input" value="Externe" <?php echo e($projects->type == 'Externe' ? 'checked' : ''); ?>><span class="custom-control-label">Externe</span>
                            </label>
                        </div>

                        <div class="form-group col-md-6" style="margin-top:5;">
                                <label for="type">Etat du projet:</label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="Actif" name="etat" checked="" class="custom-control-input" <?php echo e($projects->etat == 'Actif' ? 'checked' : ''); ?>><span class="custom-control-label">Actif</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="En attente"  name="etat" class="custom-control-input" <?php echo e($projects->etat == 'En attente' ? 'checked' : ''); ?>><span class="custom-control-label">En attente</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" value="Suspendu" name="etat" class="custom-control-input" <?php echo e($projects->etat == 'Suspendu' ? 'checked' : ''); ?>><span class="custom-control-label">suspendu</span>
                            </label>
                            
                        </div>
                    
                    </div>
                   <div class="row">
                        <div class="form-group col-md-6">
                                <label for="priorite">Priorité:</label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="priorite" class="custom-control-input"  value="P1" <?php echo e($projects->priorite == 'P1' ? 'checked' : ''); ?>><span class="custom-control-label">P1</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="priorite" class="custom-control-input"  value="P2" <?php echo e($projects->priorite == 'P2' ? 'checked' : ''); ?>><span class="custom-control-label">P2</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="priorite" class="custom-control-input"  value="P3" <?php echo e($projects->priorite == 'P3' ? 'checked' : ''); ?>><span class="custom-control-label">P3</span>
                            </label>
                        </div>

                   </div>
                    
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Modifier</button>
                    </div>
                </div>    
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>