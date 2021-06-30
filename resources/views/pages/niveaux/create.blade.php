@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Ajouter Niveau
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    Ajouter Niveau
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->


    <form method="POST" action="{{route('niveau.store')}}">
        @csrf <!--Generer Token -->
        <div class="form-row">
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Niveau</label>
                  <input type="text" class="form-control" id="inputName7" placeholder="Nom" name="libelle">
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