<?php $__env->startSection('formcomment'); ?>
<div class="card  col-md-10">
            
        <div class="card-body text-primary">
          <h5 class="card-title">Laisser un commentaire</h5>
          <div class="card-text">
            <form action="<?php echo e(route('storec')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <input type="text" name="titre" id="" class="form-control col-sm-10" placeholder="titre">
                    <?php echo e($errors->first('titre',':message')); ?>

                  </div>
                <div class="form-group">
                  <input type="text" name="contenu" id="" class="form-control col-sm-10" placeholder="contenu">
                  <?php echo e($errors->first('contenu',':message')); ?>

                </div>
                <input type="submit" value="Commenter" class="btn btn-primary">
            </form>
          </div>
        </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('show', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>