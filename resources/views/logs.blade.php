@extends('layouts.app')

@section('content')



<div class="container-fluid dashboard-content ">
    <h3 class="text-primary mb-1">Historiques des actions</h3>
    <div class="table-responsive-sm">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="center">#</th>
                    <th>Utilisateur</th>
                    <th>Action</th>
                    <th class="right">Date et heure</th>                    
                </tr>
            </thead>
            <tbody>
                @if (count($logs)>0)
                    @foreach ($logs as $log)
                        <tr>
                            <td class="center">{{$log->id}}</td>
                            <td class="left strong">{{$log->user_id}}</td>
                            <td class="left">{{$log->action}}</td>
                            <td class="right text-center">{{$log->created_at}}</td>                                                                      
                        </tr>  
                    @endforeach
                @endif                                      
            </tbody>
        </table>
    </div>
</div>
    
@endsection