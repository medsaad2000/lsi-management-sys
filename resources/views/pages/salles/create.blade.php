@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Ajouter reservation
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Ajouter reservation
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    <form method="POST" action="{{route('salle.store')}}">
        @csrf <!--Generer Token -->
        <div class="form-row">
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nomsalle">Salle</label>
                <input type="text" class="form-control" id="nomsalle"  name="nomsalle">
              </div>
              <div class="form-group col-md-6">
                <label for="dateres">Date de Reservation</label>
                <input type="date" class="form-control" id="dateres"  name="dateres">
              </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="heuredebut">Debut de reservation</label>
          <input type="time" class="form-control" id="heuredebut"  name="heuredebut">
      </div>
      <div class="form-group col-md-6">
        <label for="heurefin">Debut de reservation</label>
        <input type="time" class="form-control" id="heurefin"  name="heurefin">
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