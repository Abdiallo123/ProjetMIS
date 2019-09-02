<?php $__env->startSection('content'); ?>
	
	
	<div class="wrapper">
		<h1>Recherche</h1>

	    <form action="<?php echo e(route('recherche')); ?>" method="POST" id="envoyer"> 

	        <?php echo e(csrf_field()); ?>


	        <input type="text" name="mot_cle" placeholder="S'il vous plaît Entrer un mot cle" value="<?php echo e(old('mot_cle')); ?>" id="motCle">   
	    </form>

	    <div id="resultats">
	    	
	    </div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>