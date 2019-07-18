@extends('layouts.app')

@section('content')

    <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                            <a href="{{route('add')}}" class="btn btn-primary float-right" style="margin-bottom: 5px;">Nouveau projet</a>                       
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
                                                   <p class="font-weight-bold">{{$project->nom}} <span class="float-right">{{$project->niveau_avancement}}%</span></p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="card-text">                                                                                                             
                                                        <p>{{$project->description}}</p>
                                                    </div>
                                                    <a href="{{route('projecttask',$project->id)}}" class="btn btn-primary float-right">Détails</a>
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

