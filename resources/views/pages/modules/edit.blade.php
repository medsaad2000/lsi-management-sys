@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Modifier Modules
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Modifier Modules
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    

    <form method="POST" action="{{route('module.update',['module'=>$module->id])}}">
        @csrf <!--Generer Token -->
        @method('PUT')
        <div class="form-row">
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNameMod">Nom Module</label>
                <input type="text" class="form-control" id="inputNameMod" value="{{old('nom_module',$module->id_mod)}}" name="nom_module">
              </div>
              <div class="form-group col-md-6">
                <label for="inputProf">Id prof</label>
                <input type="number" class="form-control" id="inputProf" value="{{old('id_profmod',$module->id_prof)}}" name="id_profmod">
              </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputNiveau">Id Niveau</label>
          <input type="number" class="form-control" id="inputNiveau" value="{{old('id_niveau',$module->id_niveau)}}" name="id_niveau">
      </div>
      <div class="form-group">
        <label for="inputSemestre">Semestre</label>
        <input type="number" class="form-control" id="inputSemestre" value="{{old('semestre',$module->semestre)}}" name="semestre">
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