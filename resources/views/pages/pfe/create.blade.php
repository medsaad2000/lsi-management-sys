@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
PFE
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
PFE
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    <form method="POST" action="{{route('pfe.store')}}">
        @csrf <!--Generer Token -->
        <div class="form-row">
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="idProfPfe">Id prof</label>
                <input type="number" class="form-control" id="idProfPfe"  name="idProfPfe">
              </div>
              <div class="form-group col-md-6">
                <label for="sujetPfe">Sujet</label>
                <input type="text" class="form-control" id="sujetPfe"  name="sujetPfe">
              </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="datePfe">Date PFE</label>
          <input type="date" class="form-control" id="datePfe"  name="date_pfe">
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