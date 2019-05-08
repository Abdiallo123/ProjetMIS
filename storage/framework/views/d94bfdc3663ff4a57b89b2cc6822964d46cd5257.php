<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/fonts/circular-std/style.css')); ?>" rel="stylesheet ">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/fonts/fontawesome/css/fontawesome-all.css')); ?>">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('libs/css/style.css')); ?>">

<link src="<?php echo e(asset('css/moncss.css')); ?>" rel="stylesheet">
    <style>
        #premierl{
            background-color: transparent;
           
        }
        #premierl ul{
             list-style:none;
             margin: 0px;
             padding: 0px; 
              
        }

        #premierl ul li {
             
             

        }
        #premierl ul li a{
            font-family: Verdana sans-serif;
             color: #3490dc;
             font-size: 18px;
             font-style: inherit;

        }
        #premierl ul li a:hover{
             background-color: #3490dc;
        }

        #premierl ul ul{
            margin-left: 50px;
            margin-top: 0px;
            display: none;   
        }

        #premierl ul li:hover > ul{
            display: block;
        }
        
    </style>
</head>
<body>
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
       <!-- navbar -->
       <!-- ============================================================== -->
        <div class="dashboard-header">
           <nav class="navbar navbar-expand-lg bg-white fixed-top">
               <a class="navbar-brand"  href="<?php echo e(url('/')); ?>"> <?php echo e(config('app.name', 'Gestion Projet')); ?></a>
               
               <div class="dropdown" id="premierl">
                <a class="dropdown-toggle text-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  PROJET
                </a>
                <div class="dropdown-menu" id="navdropdown" aria-labelledby="dropdownMenu2">
                <ul>
                    <li><a href="<?php echo e(route('add')); ?>" class="dropdown-item" type="button">Nouveau</a></li>
                    <li><a href="<?php echo e(route('liste')); ?>" class="dropdown-item" type="button">Liste</a></li>
                    <li><a  href="#" class="dropdown-item" type="button" >Filtre</a>
                    <ul>
                            <li><a href="<?php echo e(url('filtrer/Actif')); ?>" class="dropdown-item" type="button">Projets actifs</a></li>
                            <li><a href="<?php echo e(url('filtrer/Archivé')); ?>" class="dropdown-item" type="button">Project archivés</a></li>
                            <li><a href="<?php echo e(url('filtrer/En attente')); ?>" class="dropdown-item" type="button">Project en attente</a></li>
                            <li><a href="<?php echo e(url('filtrer/Suspendu')); ?>" class="dropdown-item" type="button">Project suspendu</a></li>
                 </ul>
                </li>
                
                </ul>
                </div>
              </div>

               <div class="collapse navbar-collapse " id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto navbar-right-top">
                                               
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Connexion')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Inscription')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                           
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                     
                        <?php endif; ?>
                    </ul>
                </div>
            
            </nav>
        </div>

        
        

        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-10 col-sm-12 col-10  center-block" 
                    style="margin-top: 50px;">
                        <main class="py-4">
                            <?php echo $__env->yieldContent('content'); ?>
                        </main>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://Mistechllc.com">MIS Tech</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Nous Contacter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo e(asset('vendor/jquery/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/slimscroll/jquery.slimscroll.js')); ?>"></script>
<script src="<?php echo e(asset('libs/js/main-js.js')); ?>"></script>
</body>
</html>
