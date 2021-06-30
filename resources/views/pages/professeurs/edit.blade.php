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


    

    <form method="POST" action="{{route('Professeur.update',['Professeur'=>$professeur->id])}}">
        @csrf <!--Generer Token -->
        @method('PUT')
        <div class="form-row">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nom</label>
                  <input type="text" class="form-control" id="inputName4" value="{{old('nom_prof',$professeur->nom_prof)}}" name="nom_prof">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Prenom</label>
                  <input type="text" class="form-control" id="inputPrenom4" value="{{old('prenon_prof',$professeur->prenom_prof)}}" name="prenom_prof">
                </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" value="{{old('email_prof',$professeur->email_prof)}}" name="email_prof">
        </div>
        <div class="form-group">
          <label for="inputCIN">CIN</label>
          <input type="text" class="form-control" id="inputCIN" value="{{old('cin_prof',$professeur->cin)}}" name="cin_prof">
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