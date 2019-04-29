@extends('show')

@section('formcomment')
<div class="card  col-md-10">
            
        <div class="card-body text-primary">
          <h5 class="card-title">Laisser un commentaire</h5>
          <div class="card-text">
            <form action="{{route('storec')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="titre" id="" class="form-control col-sm-10" placeholder="titre">
                    {{$errors->first('titre',':message')}}
                  </div>
                <div class="form-group">
                  <input type="text" name="contenu" id="" class="form-control col-sm-10" placeholder="contenu">
                  {{$errors->first('contenu',':message')}}
                </div>
                <input type="submit" value="Commenter" class="btn btn-primary">
            </form>
          </div>
        </div>
</div>
@endsection

