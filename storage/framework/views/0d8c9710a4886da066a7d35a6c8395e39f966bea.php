<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle de navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a class="navbar-brand"  href="#">Partage de connaissance</a>	
		</div>
			<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">



				<li class="nav-item ">
            		<a class="nav-link" href="<?php echo e(route('index')); ?>">Accueil</a>
          		</li>


           		<li class="nav-item ">
            		<a class="nav-link" href="<?php echo e(route('formulaire')); ?>">Ajouter topic</a>
          		</li>

				

				
			</ul>
			</div>
	</div>	
</nav>