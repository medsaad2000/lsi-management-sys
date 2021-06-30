@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Modifier examens
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Modifier examens
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    

    <form method="POST" action="{{route('examen.update',['examan'=>$examen->id])}}">
        @csrf <!--Generer Token -->
        @method('PUT')
        <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputNameMod">Id Etudiant</label>
                <input type="number"  class="form-control" id="inputNameMod" value="{{old('idEtudiant',$examen->id_etd)}}" name="idEtudiant">
              </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="idModule">Id Module</label>
          <input type="number" class="form-control" id="idModule" value="{{old('idModule',$examen->id_module)}}" name="idModule">
      </div>
      <div class="form-group">
        <label for="noteExamen">Note Examen</label>
        <input type="number" step=0.01 class="form-control" id="noteExamen" value="{{old('noteExamen',$examen->Note_examen)}}" name="noteExamen">
      </div>
      <div class="form-group">
        <label for="dateExamen">Date Examen</label>
        <input type="date" class="form-control" id="dateExamen" value="{{old('dateExamen',$examen->Date_examen)}}" name="dateExamen">
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