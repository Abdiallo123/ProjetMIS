<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

   

    <!-- Fonts -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('assets/vendor/fonts/circular-std/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/chartist-bundle/chartist.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/morris-bundle/morris.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/c3charts/c3.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')); ?>">

<link src="<?php echo e(asset('css/moncss.css')); ?>" rel="stylesheet">
    <style>

        *{
            font-family: Verdana, sans-serif;
        }

        

        .icon-bar {
            width: 100%; 
            background-color: #555; 
            
            height: 50px;
        }

        .icon-bar a {
            /*float: left;*/ 
            text-align: center; 
            width: 10%; 
            height: 10%;
            padding: 0 0; 
            /*transition: all 0.3s ease;*/
            color: white; 
            font-size: 18px; 
        }

        .icon-bar a:hover {
            background-color: #000; 
        }

        .active {
            background-color: #4CAF50; 
        }
        .card-title{
            color: #3490dc;
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
                        <a class="navbar-brand" href="index.html">MIS GESTION</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-right-top">
                                
                                <li class="nav-item dropdown notification">
                                    <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                        <li>
                                            <div class="notification-title"> Notification</div>
                                            <div class="notification-list">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item list-group-item-action active">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                                <div class="notification-date">2 days ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="notification-info">
                                                            <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                            <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                                <div class="notification-date">2 min ago</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="list-footer"> <a href="#">View all notifications</a></div>
                                        </li>
                                    </ul>
                                </li>
                               
                                <li class="nav-item dropdown nav-user">
                                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                        <div class="nav-user-info">
                                            <?php if(auth()->guard()->check()): ?>
                                            <h5 class="mb-0 text-white nav-user-name"><?php echo e(auth::user()->name); ?></h5>
                                            <?php endif; ?>
                                            
                                            <span class="status"></span><span class="ml-2">Available</span>
                                        </div>
                                        <a class="dropdown-item" href="<?php echo e(url('/login')); ?>"><i class="fas fa-user mr-2"></i>Connexion</a>
                                        <a class="dropdown-item" href="<?php echo e(url('/register')); ?>"><i class="fas fa-user mr-2"></i>Inscription</a>
                                        <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>"><i class="fas fa-power-off mr-2"></i>Déconnexion</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- ============================================================== -->
                <!-- end navbar -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- left sidebar -->
                <!-- ============================================================== -->
                <div class="nav-left-sidebar sidebar-dark float-left">
                        <div class="menu-list">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav flex-column">
                                        <li class="nav-divider">
                                            Tableau de bord
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Projets</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                   
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo e(route('add')); ?>">Nouveau</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo e(route('liste')); ?>">Lister</a>
                                                    </li> 
                                                </ul>
                                            </div>
                                        </li> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-3" aria-controls="submenu-1-1">Opérations</a>
                                            <div id="submenu-1-3" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo e(route('actif')); ?>">Projet actifs</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo e(route('enattente')); ?>">Projets en attente</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo e(route('suspendu')); ?>">Projets suspendus</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="<?php echo e(route('archive')); ?>">Projets archivés</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('logs')); ?>">Historiques</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                    
                <!-- ============================================================== -->
                <!-- end left sidebar -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- wrapper  -->
                <!-- ============================================================== -->
                <div class="dashboard-wrapper">
                    <div class="dashboard-ecommerce">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                    <!-- ============================================================== -->
                    <!-- footer -->
                    <!-- ============================================================== -->
                    
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="<?php echo e(asset('assets/vendor/jquery/jquery-3.3.1.min.js')); ?>"></script>
    <!-- bootstap bundle js -->
<script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')); ?>"></script>
    <!-- slimscroll js -->
<script src="<?php echo e(asset('assets/vendor/slimscroll/jquery.slimscroll.js')); ?>"></script>
    <!-- main js -->
    <script src="<?php echo e(asset('assets/libs/js/main-js.js')); ?>"></script>
    <!-- chart chartist js -->
<script src="<?php echo e(asset('assets/vendor/charts/chartist-bundle/chartist.min.js')); ?>"></script>
    <!-- sparkline js -->
<script src="<?php echo e(asset('assets/vendor/charts/sparkline/jquery.sparkline.js')); ?>"></script>
    <!-- morris js -->
    <script src="<?php echo e(asset('assets/vendor/charts/morris-bundle/raphael.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/charts/morris-bundle/morris.js')); ?>"></script>
    <!-- chart c3 js -->
    <script src="<?php echo e(asset('assets/vendor/charts/c3charts/c3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/charts/c3charts/C3chartjs.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/libs/js/dashboard-ecommerce.js')); ?>"></script>

</body>
</html>
