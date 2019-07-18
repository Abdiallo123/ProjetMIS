
@extends('layouts.app')

@section('content')

    <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <div class="row">
                            <h2 class="pageheader-title">Liste des projets </h2>
                            <a href="{{route('add')}}" class="btn btn-primary float-right">Nouveau projet</a>
                        </div>                        
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @if (count($projects)>0)
                                    @foreach ($projects as $project)
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                   <p class="font-weight-bold">{{$project->nom}}</p>
                                                   <p class="float-right">{{$project->niveau_avancement}}%</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-text">                                                                                                             
                                                        <p>{{$project->description}}</p>
                                                    </div>
                                                    <a href="{{route('restorer',$project->id)}}" class="btn btn-primary float-right">Restaurer</a>
                                                </div>
                                                <div class="card-footer d-flex text-muted">
                                                       <p> Du {{$project->date_debut}} au {{$project->date_fin}}</p>
                                                    </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>                                                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
@endsection




