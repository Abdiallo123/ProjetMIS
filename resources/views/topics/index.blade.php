@extends('layouts.master')

@section('container')
	
	
	<div class="wrapper">
			<h1>Recherche</h1>

		    <form action="{{route('recherche')}}" method="POST"> 

		        {{ csrf_field() }}

		        <input type="text" name="mot_cle" placeholder="S'il vous plaît Entrer un mot cle" value="{{ old('mot_cle') }}">
		    </form>
	</div>
@stop