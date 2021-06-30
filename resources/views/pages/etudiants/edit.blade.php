@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Ajouter Professeur
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Ajouter Professeur
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    

    <form method="POST" action="{{route('etudiant.update',['etudiant'=>$etudiant->id])}}">
        @csrf <!--Generer Token -->
        @method('PUT')
        <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNameEt">Nom</label>
                <input type="text" class="form-control" id="inputNameEt" value="{{old('nom_et',$etudiant->nom)}}" name="nom_et">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPrenomEt">Prenom</label>
                <input type="text" class="form-control" id="inputPrenomEt" value="{{old('prenom_et',$etudiant->prenom)}}" name="prenom_et">
              </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="cinEt">CIN</label>
          <input type="text" class="form-control" id="cinEt" value="{{old('cinEt',$etudiant->cin)}}" name="cinEt">
      </div>
      <div class="form-group col-md-6">
        <label for="cneEt">CNE</label>
        <input type="text" class="form-control" id="cneEt" value="{{old('cneEt',$etudiant->cne)}}" name="cneEt">
    </div>
  </div>


    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="apogee">Apogée</label>
        <input type="text" class="form-control" id="apogee" value="{{old('apogee',$etudiant->apogee)}}" name="apogee">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="niveau_et">Niveau</label>
        <input type="number" class="form-control" id="niveau_et" value="{{old('niveau_et',$etudiant->id_niveau)}}" name="niveau_et">
      </div>
    </div>

    <div class="form-row">
      <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary"><i class="ti-save"></i>Enregistrer</button>
    </div>
      </div>


        @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
            <li style="color: red">{{$error}}</li>
          @endforeach
        </ul>
        @endif
    </form>

 
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection