@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Ajouter pfe
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Ajouter pfe
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    

    <form method="POST" action="{{route('pfe.update',['pfe'=>$pfe->id_pfe])}}">
        @csrf <!--Generer Token -->
        @method('PUT')
        <div class="form-row">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="idProfPfe">Id_prof</label>
                  <input type="number" class="form-control" id="idProfPfe" value="{{old('idProfPfe',$pfe->id_prof)}}" name="idProfPfe">
                </div>
                <div class="form-group col-md-6">
                  <label for="sujetPfe">Sujet</label>
                  <input type="text" class="form-control" id="sujetPfe" value="{{old('sujetPfe',$pfe->sujet)}}" name="sujetPfe">
                </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="datePfe">Date PFE</label>
            <input type="date" class="form-control" id="datePfe" value="{{old('datePfe',$pfe->date_pfe)}}" name="date_pfedate_pfe">
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