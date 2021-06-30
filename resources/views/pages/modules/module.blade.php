@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    Modules
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Modules
@stop
<!-- breadcrumb -->
@endsection
@section('content')

@if(session()->has('statut'))
      <h3 style="color: green">
        {{ session()->get('statut')}}
      </h3>
@endif
<a href="{{ route('module.create') }}"><button type="button" class="btn btn-success"><i class="ti-plus"></i>Ajouter module</button></a>
    <!-- row -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id Module</th>
            <th scope="col">Nom Module</th>
            <th scope="col">Id Prof</th>
            <th scope="col">Semestre</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
    
     @foreach($data_mod as $module) 
    
          <tr>
            <th scope="row">{{$module->id}}</th>
            <td>{{$module->nom_mod}}</td>
            <td>{{$module->id_prof}}</td>
            <td>{{$module->semestre}}</td>
            <td><a href="{{route('module.edit' , ['module' => $module->id])}}"><button type="button" class="btn btn-info"><i class="ti-new-window"></i>Modifier</button></a></td>
            {{-- <td><a href="{{route('Professeur.destroy' , ['Professeur' => $professeur->id])}}"><button type="button" class="btn btn-danger"><i class="ti-trash"></i>Supprimer</button></a></td> --}}
            <td> <form method="POST" action="{{route('module.destroy',['module'=>$module->id])}}">
              @csrf <!--Generer Token -->
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><i class="ti-trash"></i>Supprimer</button>
              </form>
            </td>
            </tr>
     @endforeach
        </tbody>
        
      </table>  
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection