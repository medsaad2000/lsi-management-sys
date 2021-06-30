@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Ajouter Module
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Ajouter Module
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    <form method="POST" action="{{route('etudiant.store')}}">
        @csrf <!--Generer Token -->
        <div class="form-row">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNameEt">Nom</label>
                  <input type="text" class="form-control" id="inputNameEt" placeholder="Nom" name="nom_et">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPrenomEt">Prenom</label>
                  <input type="text" class="form-control" id="inputPrenomEt" placeholder="Prenom" name="prenom_et">
                </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cinEt">CIN</label>
            <input type="text" class="form-control" id="cinEt" placeholder="CIN" name="cinEt">
        </div>
        <div class="form-group col-md-6">
          <label for="cneEt">CNE</label>
          <input type="text" class="form-control" id="cneEt" placeholder="CNE" name="cneEt">
      </div>
    </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="apogee">Apogée</label>
          <input type="text" class="form-control" id="apogee" placeholder="Apogée" name="apogee">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="niveau_et">Niveau</label>
          <input type="number" class="form-control" id="niveau_et" placeholder="Niveau" name="niveau_et">
        </div>
      </div>

      

        <div class="form-row">
        <button type="submit" class="btn btn-primary"><i class="ti-save"></i>Enregistrer</button>
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