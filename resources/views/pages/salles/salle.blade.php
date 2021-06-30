@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    Liste des salle
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Reservation des Salles
@stop
<!-- breadcrumb -->
@endsection
@section('content')

@if(session()->has('statut'))
      <h3 style="color: green">
        {{ session()->get('statut')}}
      </h3>
@endif
<a href="{{ route('salle.create') }}"><button type="button" class="btn btn-success"><i class="ti-plus"></i>Ajouter salle</button></a>
    <!-- row -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id Reservation</th>
            <th scope="col">Nom Salle</th>
            <th scope="col">Date Reservation</th>
            <th scope="col">Heure debut</th>
            <th scope="col">Heure fin</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
    
     @foreach($data_salle as $salle) 
    
          <tr>
            <th scope="row">{{$salle->id}}</th>
            <td>{{$salle->nom_salle}}</td>
            <td>{{$salle->date_reservation}}</td>
            <td>{{$salle->heure_debut}}</td>
            <td>{{$salle->heure_fin}}</td>
            <td><a href="{{route('salle.edit' , ['salle' => $salle->id])}}"><button type="button" class="btn btn-info"><i class="ti-new-window"></i>Modifier</button></a></td>
            {{-- <td><a href="{{route('salle.destroy' , ['salle' => $salle->id])}}"><button type="button" class="btn btn-danger"><i class="ti-trash"></i>Supprimer</button></a></td> --}}
            <td> <form method="POST" action="{{route('salle.destroy',['salle'=>$salle->id])}}">
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