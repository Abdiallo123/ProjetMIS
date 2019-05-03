<?php $__env->startSection('content'); ?>
    
    <div>
    <form class="container-fluid"  action="<?php echo e(route('updatep', $projects->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        
            <div class="card">
                <div class="card-header primary">
                    <h3 class="mb-1">Modifier</h3>
                    <p>Please enter the project informations.</p>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="nom"  value="<?php echo e($projects->nom); ?>" placeholder="Nom du projet" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="description" value="<?php echo e($projects->description); ?>" placeholder="Description" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="date" name="date_debut" value="<?php echo e($projects->date_debut); ?>" placeholder="Date debut">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" value="<?php echo e($projects->date_fin); ?>" name="date_fin" placeholder="Date fin" type="date" >
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="client" value="<?php echo e($projects->client); ?>" placeholder="Nom Client" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" checked="" class="custom-control-input"><span class="custom-control-label">Actif</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">En attente</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">Archivé</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">suspendu</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="etat" class="custom-control-input"><span class="custom-control-label">Clôturé</span>
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
                        <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                    </div>
                    
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>