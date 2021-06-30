@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    Liste des professeurs
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Liste des professeurs
@stop
<!-- breadcrumb -->
@endsection
@section('content')

@if(session()->has('statut'))
      <h3 style="color: green">
        {{ session()->get('statut')}}
      </h3>
@endif
<a href="{{ route('Professeur.create') }}"><button type="button" class="btn btn-success"><i class="ti-plus"></i>Ajouter professeur</button></a>
    <!-- row -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nom</th>
            <th scope="col">Preom</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
    
     @foreach($data as $professeur) 
    
          <tr>
            <th scope="row">{{$professeur->id}}</th>
            <td>{{$professeur->nom_prof}}</td>
            <td>{{$professeur->prenom_prof}}</td>
            <td><a href="{{route('Professeur.edit' , ['Professeur' => $professeur->id])}}"><button type="button" class="btn btn-info"><i class="ti-new-window"></i>Modifier</button></a></td>
            {{-- <td><a href="{{route('Professeur.destroy' , ['Professeur' => $professeur->id])}}"><button type="button" class="btn btn-danger"><i class="ti-trash"></i>Supprimer</button></a></td> --}}
            <td> <form method="POST" action="{{route('Professeur.destroy',['Professeur'=>$professeur->id])}}">
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