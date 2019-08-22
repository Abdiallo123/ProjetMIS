<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

   

    <!-- Fonts -->
<<<<<<< HEAD
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('vendor/fonts/circular-std/style.css')); ?>" rel="stylesheet ">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/fonts/fontawesome/css/fontawesome-all.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('libs/css/style.css')); ?>">

=======
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('assets/vendor/fonts/circular-std/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/chartist-bundle/chartist.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/morris-bundle/morris.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/charts/c3charts/c3.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css')); ?>">

>>>>>>> eb312757c98f5381f7dd73f85318d2ed041ad535
<link src="<?php echo e(asset('css/moncss.css')); ?>" rel="stylesheet">
    <style>

        *{
            font-family: Verdana, sans-serif;
        }
<<<<<<< HEAD

        #premierl{
            background-color: transparent;
            font-family: robotto,  sans-serif;
        }
        #premierl ul{
             list-style:none;
             margin: 0px;
             padding: 0px; 
              
        }

        #premierl ul li {
             
             

        }
        #premierl ul li a{
            font-family: Verdana, sans-serif;
             color: #3490dc;
             font-size: 14px;
             font-style: inherit;    

        }
        #premierl ul li a:hover{
             background-color: #3490dc;
             color: #fff;
        }

        #premierl ul ul{
            margin-left: 50px;
            margin-top: 0px;
            display: none;   
        }

        #premierl ul li:hover > ul{
            display: block;
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
        #pwidget
{
  background-color:lightgray;
  width:254px;
  padding:2px;
  -moz-border-radius:3px;
  border-radius:3px;
  text-align:left;
  border:1px solid gray;	
}
#progressbar
{
  width:250px;
  padding:1px;
  background-color:white;
  border:1px solid black;
  height:28px;
}
#indicator
{
  width:0px;
  background-image:url("shaded-green.png");
  height:28px;
  margin:0;
}
#progressnum
{
  text-align:center;
  width:250px;
}
.encapsule-card
{
    margin-top: 10px;
    border-radius: 20px;
    height: 250px;
    font-size: 15sp;
    box-align: center;
    font-style: normal;
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
               
               <a class="navbar-brand"  href="<?php echo e(url('/')); ?>"><i class="fa fa-fw fa-home"></i></a>
               
               <div class="dropdown" id="premierl">
                    <a class="dropdown-toggle text-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-plus"></i>  PROJET
                    </a>
                    <div class="dropdown-menu" id="navdropdown" aria-labelledby="dropdownMenu2">
                    <ul>
                        <li><a href="<?php echo e(route('add')); ?>" class="dropdown-item" type="button">Nouveau</a></li>
                        <li><a href="<?php echo e(route('liste')); ?>" class="dropdown-item" type="button">Liste</a></li>
                        <li><a  href="#" class="dropdown-item" type="button" >Filtre</a>
                        <ul>
                                <li><a href="<?php echo e(route('actif')); ?>" class="dropdown-item" type="button">Projets actifs</a></li>
                                <li><a href="<?php echo e(route('archive')); ?>" class="dropdown-item" type="button">Project archivés</a></li>
                                <li><a href="<?php echo e(route('enattente')); ?>" class="dropdown-item" type="button">Project en attente</a></li>
                                <li><a href="<?php echo e(route('suspendu')); ?>" class="dropdown-item" type="button">Project suspendu</a></li>
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
                            <li>
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Inscription')); ?></a>
                            </li>
                        <?php endif; ?>     
                        <?php else: ?>
                                                           
                            <div class="" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-toggle text-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-fw fa-user"></i>  <?php echo e(auth::user()->name); ?>

                                    </a>
                                <div class="dropdown-menu" id="navdropdown" aria-labelledby="dropdownMenu2">
                                    <ul>
                                       
                                            <li><a class="" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                <?php echo e(__('Logout')); ?>

                                            </a>

                                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                            </li>
                                        </ul>
                                    </div>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
=======

        

        .icon-bar {
            width: 100%; 
            background-color: #555; 
            
            height: 50px;
        }
>>>>>>> eb312757c98f5381f7dd73f85318d2ed041ad535

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

<<<<<<< HEAD
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
            <div class="footer fixed-bottom">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://Mistechllc.com">MIS Tech</a>.
=======
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
                                            <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                            <span class="status"></span><span class="ml-2">Available</span>
                                        </div>
                                        <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                        <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
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
                                            Menu
                                        </li>
                                        <li class="nav-item ">
                                            <a class="nav-link active" href="#" ><i class="fa fa-fw fa-user-circle"></i>Tableau de bord</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">Utilisateur</a>
                                            <div id="submenu-1-2" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Users</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Profile</a>
                                                    </li>
                                            
                                                </ul>
                                            </div>
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
                                                        <a class="nav-link" href="<?php echo e(route('suspendu')); ?>">Projets archivés</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
>>>>>>> eb312757c98f5381f7dd73f85318d2ed041ad535
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
                    <div class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                     Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="text-md-right footer-links d-none d-sm-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end footer -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
<<<<<<< HEAD
            
        </div>
    </div>
=======
>>>>>>> eb312757c98f5381f7dd73f85318d2ed041ad535
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
