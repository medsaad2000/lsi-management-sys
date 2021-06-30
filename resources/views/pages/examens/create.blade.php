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


    <form method="POST" action="{{route('examen.store')}}">
        @csrf <!--Generer Token -->
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="idEtudiant">Id Etudiant</label>
                <input type="number" class="form-control" id="idEtudiant"  name="idEtudiant">
              </div>
              <div class="form-group col-md-6">
                <label for="idModule">Id Module</label>
                <input type="number" class="form-control" id="idModule"  name="idModule">
              </div>
      </div>
      <div class="form-row">
      <div class="form-group">
        <label for="noteExamen">Note Examen</label>
        <input type="number" step=0.01 class="form-control" id="noteExamen"  name="noteExamen">
      </div>
      <div class="form-group">
        <label for="dateExamen">Date Examen</label>
        <input type="date" class="form-control" id="dateExamen"  name="dateExamen">
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