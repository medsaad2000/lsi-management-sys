@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
Etudiants
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Etudiants
@stop
<!-- breadcrumb -->
@endsection
@section('content')

@if(session()->has('statut'))
      <h3 style="color: green">
        {{ session()->get('statut')}}
      </h3>
@endif
<a href="{{ route('etudiant.create') }}"><button type="button" class="btn btn-success"><i class="ti-plus"></i>Ajouter etudiant</button></a>
    <!-- row -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id etudiant</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">CIN</th>
            <th scope="col">CNE</th>
            <th scope="col">Apogée</th>
            <th scope="col">Niveau</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
    
     @foreach($data_et as $etudiant) 
    
          <tr>
            <th scope="row">{{$etudiant->id}}</th>
            <td>{{$etudiant->nom}}</td>
            <td>{{$etudiant->prenom}}</td>
            <td>{{$etudiant->cin}}</td>
            <td>{{$etudiant->cne}}</td>
            <td>{{$etudiant->apogee}}</td>
            <td>{{$etudiant->id_niveau}}</td>
            <td><a href="{{route('etudiant.edit' , ['etudiant' => $etudiant->id])}}"><button type="button" class="btn btn-info"><i class="ti-new-window"></i>Modifier</button></a></td>
            {{-- <td><a href="{{route('Professeur.destroy' , ['Professeur' => $professeur->id])}}"><button type="button" class="btn btn-danger"><i class="ti-trash"></i>Supprimer</button></a></td> --}}
            <td> <form method="POST" action="{{route('etudiant.destroy',['etudiant'=>$etudiant->id])}}">
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