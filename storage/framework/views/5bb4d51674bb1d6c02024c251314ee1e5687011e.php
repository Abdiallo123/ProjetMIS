<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('storet',$project->id)); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
      <label for="nom"></label>
      <input type="text" name="nom" id="" class="form-control" placeholder="Nom" aria-describedby="helpId">
      <small id="nomhelp" class="text-muted">Entrez le nom</small>
    </div>
    <div class="form-group">
        <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
        <?php echo e($errors->first('description',':message')); ?>

      </div>
    
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>