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
                    <div class="form-group">
                        <input class="form-control" type="date" name="date_debut" value="<?php echo e($projects->date_debut); ?>" placeholder="Date debut">
                    </div>
                    <div class="form-group">
                        <input class="form-control" value="<?php echo e($projects->date_fin); ?>" name="date_fin" placeholder="Date fin" type="date" >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="client" value="<?php echo e($projects->client); ?>" placeholder="Nom Client" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="Actif" name="etat" checked="" class="custom-control-input"><span class="custom-control-label">Actif</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="En attente" name="etat" class="custom-control-input"><span class="custom-control-label">En attente</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="Archiver" name="etat" class="custom-control-input"><span class="custom-control-label">Archivé</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" value="Suspendu" name="etat" class="custom-control-input"><span class="custom-control-label">suspendu</span>
                        </label>
                        
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" checked="false" class="custom-control-input"><span class="custom-control-label">Entreprise</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="type" class="custom-control-input"><span class="custom-control-label">Pour un client</span>
                        </label>
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