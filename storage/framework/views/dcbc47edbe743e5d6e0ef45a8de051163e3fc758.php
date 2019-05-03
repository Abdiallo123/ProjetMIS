<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('storet')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label for="nom"></label>
      <input type="text" name="nom" id="" class="form-control" placeholder="Nom" aria-describedby="helpId">
      <small id="nomhelp" class="text-muted">Entrez le nom</small>
    </div>
    <div class="form-group">
      <label for="description"></label>
      <input type="text" name="description" id="" class="form-control" placeholder="Description" aria-describedby="helpId">
      <small id="deschelp" class="text-muted">Optionnel</small>
    </div>
    <div class="form-group">
      <label for=""></label>
      <input type="text" name="etat" id="" class="form-control" placeholder="Etat" aria-describedby="helpId">
      <small id="helpId" class="text-muted">Etat de la tache</small>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>