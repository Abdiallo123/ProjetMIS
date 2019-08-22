@extends('layouts.master')

@section('container')
	<div class="wrapper">
			<h1>Recherche</h1>

		    <form action="{{route('recherche')}} " method="POST"> 

		        {{ csrf_field() }}

		        <input type="text" name="mot_cle" placeholder="S'il vous plaît Entrer un mot cle" value="">
		       <!--  <input type="submit" value="Raccourcisseur URL"> -->
		    </form>
	</div>


	@foreach($topics as $topic)

		<div class="titre">
			@if($topic->contenu_lien)
				<h1> <a href="{{$topic->contenu_lien}}" target="_blank">{{$topic->titre}}</a> </h1>
			@else
				<h1><a href="{{ asset('contenu_fichier/'.$topic->contenu_fichier) }}" target="_blank"> {{$topic->titre}} </a></h1>
			@endif
		</div>

		<div class="lien">
			<h1>{{-- <a href="{{$topic->contenu_lien}}" target="_blank"> --}}
				{{$topic->contenu_lien}}
			{{-- </a> --}}</h1>
		</div>

		<div class="fichier">
			<h1>{{-- <a href="{{ asset('contenu_fichier/'.$topic->contenu_fichier) }}" target="_blank"> --}}
				{{$topic->contenu_fichier}}
			{{-- </a> --}}</h1>
		</div>
{{-- 
		<div class="motCle">
			{{$topic->mot_cle}} 
		</div>
		 --}}

	@endforeach
@stop