<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{asset('vendor/fonts/circular-std/style.css') }}" rel="stylesheet ">
    <link rel="stylesheet" href="{{asset('vendor/fonts/fontawesome/css/fontawesome-all.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('libs/css/style.css')}}">

<link src="{{ asset('css/moncss.css')}}" rel="stylesheet">
    <style>

        *{
            font-family: Verdana, sans-serif;
        }

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
        
    </style>
</head>
<body>
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
       <!-- navbar -->
       <!-- ============================================================== -->
        <div class="dashboard-header">
           <nav class="navbar navbar-expand-lg bg-white fixed-top">
               <a class="navbar-brand"  href="{{ url('/') }}"> {{ config('app.name', 'Gestion Projet') }}</a>
               
               <div class="dropdown" id="premierl">
                <a class="dropdown-toggle text-primary" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  PROJET
                </a>
                <div class="dropdown-menu" id="navdropdown" aria-labelledby="dropdownMenu2">
                <ul>
                    <li><a href="{{route('add')}}" class="dropdown-item" type="button">Nouveau</a></li>
                    <li><a href="{{route('liste')}}" class="dropdown-item" type="button">Liste</a></li>
                    <li><a  href="#" class="dropdown-item" type="button" >Filtre</a>
                    <ul>
                            <li><a href="{{route('actif')}}" class="dropdown-item" type="button">Projets actifs</a></li>
                            <li><a href="{{route('archive')}}" class="dropdown-item" type="button">Project archivés</a></li>
                            <li><a href="{{route('enattente')}}" class="dropdown-item" type="button">Project en attente</a></li>
                            <li><a href="{{route('suspendu')}}" class="dropdown-item" type="button">Project suspendu</a></li>
                 </ul>
                </li>
                
                </ul>
                </div>
              </div>

               <div class="collapse navbar-collapse " id="navbarSupportedContent">
                   <ul class="navbar-nav ml-auto navbar-right-top">
                                               
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Inscription') }}</a>
                                </li>
                            @endif
                        @else
                           
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="" aria-labelledby="navbarDropdown">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                     
                        @endguest
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
                            @yield('content')
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
    <script src="{{ asset('vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('vendor/slimscroll/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('libs/js/main-js.js') }}"></script>
</body>
</html>
