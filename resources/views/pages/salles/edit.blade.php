@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Modifier Reservation d'une salle
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Modifier Reservation d'une Salle
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    

    <form method="POST" action="{{route('salle.update',['salle'=>$salle->id])}}">
        @csrf <!--Generer Token -->
        @method('PUT')
        <div class="form-row">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nomsalle">Salle</label>
                  <input type="text" class="form-control" id="nomsalle" value="{{old('nomsalle',$salle->nom_salle)}}" name="nomsalle">
                </div>
                <div class="form-group col-md-6">
                  <label for="dateres">Date de Reservation</label>
                  <input type="date" class="form-control" id="dateres" value="{{old('dateres',$salle->date_reservation)}}" name="dateres">
                </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="heuredebut">Debut de reservation</label>
            <input type="time" class="form-control" id="heuredebut" value="{{old('heuredebut',$salle->heure_debut)}}" name="heuredebut">
        </div>
        <div class="form-group col-md-6">
          <label for="heurefin">Fin de reservation</label>
          <input type="time" class="form-control" id="heurefin" value="{{old('heurefin',$salle->heure_fin)}}" name="heurefin">
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