<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
	<div class="container  col-md-8 col-md-offset-2 col-xs-12">
		
			<h1>Créer un topic</h1>

			<form action=" <?php echo e(route('traitement')); ?> " method="POST" 
			enctype="multipart/form-data">

				<?php echo e(csrf_field()); ?>




				<div class="form-group <?php echo e($errors->has('titre') ? 'has-error' : ''); ?>">
					<label for="titre" class="control-label">Titre</label>

					<input type="text" name="titre" id="titre" value=" <?php echo e(old('titre')); ?>" class="form-control">

					<?php echo $errors->first('titre', '<p class="error">:message</p>'); ?>

				</div>




				<div class="form-group">
					<label class="control-label">Type</label>
					<select class="form-control" name="type" id="type">
						<?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($type->id); ?>"> <?php echo e($type->nom); ?> </option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</select>
				</div>



				<div class="form-group <?php echo e($errors->has('contenu_lien') ? 'has-error' : ''); ?>" id="contenu_liens">
					<label for="contenu_lien" class="control-label">Contenu lien</label>

					<input type="text" name="contenu_lien" id="contenu_lien" value=" <?php echo e(old('contenu_lien')); ?>" class="form-control">
					
					<?php echo $errors->first('contenu_lien', '<p class="error">:message</p>'); ?>

				</div>

				<div class="form-group <?php echo e($errors->has('contenu_fichier') ? 'has-error' : ''); ?>" id="contenu_fichiers" style="display: none">
					<label for="contenu_fichier" class="control-label">Contenu fichier</label>

					<input type="file" name="contenu_fichier" id="contenu_fichier" value=" <?php echo e(old('contenu_fichier')); ?>" class="form-control">
					
					<?php echo $errors->first('contenu_fichier', '<p class="error">:message</p>'); ?>

				</div>

				<div class="form-group <?php echo e($errors->has('mot_cle') ? 'has-error' : ''); ?>">
					<label for="mot_cle" class="control-label">Mot cle</label>

					<input type="text" name="mot_cle" id="mot_cle" value=" <?php echo e(old('mot_cle')); ?>" class="form-control">
					
					<?php echo $errors->first('mot_cle', '<p class="error">:message</p>'); ?>

				</div>


				
				<div class="form-group" style="margin-bottom: -4%;">
					<input type="submit" name="Valider" value="Valider &raquo;" class="btn btn-primary btn-block">
				</div>


				
			</form>

	</div>
	</div>
	<script type="text/javascript">
		const type = document.querySelector('#type');
		const lien = document.querySelector('#contenu_liens');
		const fichier = document.querySelector('#contenu_fichiers');

		type.addEventListener('change', event => {
			const selected = Number(type.value);
			
			if(selected === 1) { // Lien: selected
				fichier.style.display = "none";
				lien.style.removeProperty('display');
			}
			else if(selected === 2) { // Fichier: selected
				lien.style.display = "none";
				fichier.style.removeProperty('display');
			}
		})
	</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>