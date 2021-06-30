@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    Liste des niveaux
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Liste des Niveaux
@stop
<!-- breadcrumb -->
@endsection
@section('content')

@if(session()->has('statut'))
      <h3 style="color: green">
        {{ session()->get('statut')}}
      </h3>
@endif
<a href="{{ route('niveau.create') }}"><button type="button" class="btn btn-success"><i class="ti-plus"></i>Ajouter niveau</button></a>
    <!-- row -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id Niveau</th>
            <th scope="col">Niveau</th>
          </tr>
        </thead>
        <tbody>
    
     @foreach($data_n as $niveau) 
    
          <tr>
            <th scope="row">{{$niveau->id}}</th>
            <td>{{$niveau->libelle}}</td>
            <td><a href="{{route('niveau.edit' , ['niveau' => $niveau->id])}}"><button type="button" class="btn btn-info"><i class="ti-new-window"></i>Modifier</button></a></td>
            <td> <form method="POST" action="{{route('niveau.destroy',['niveau'=>$niveau->id])}}">
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