@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    Liste des PFE
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Liste des PFE
@stop
<!-- breadcrumb -->
@endsection
@section('content')

@if(session()->has('statut'))
      <h3 style="color: green">
        {{ session()->get('statut')}}
      </h3>
@endif
<a href="{{ route('pfe.create') }}"><button type="button" class="btn btn-success"><i class="ti-plus"></i>Ajouter PFE</button></a>
    <!-- row -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id PFE</th>
            <th scope="col">Id Prof</th>
            <th scope="col">Sujet</th>
            <th scope="col">Date PFE</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
    
     @foreach($data_pfe as $pfe) 
    
          <tr>
            <th scope="row">{{$pfe->id}}</th>
            <td>{{$pfe->id_prof}}</td>
            <td>{{$pfe->sujet}}</td>
            <td>{{$pfe->date_pfe}}</td>
            <td><a href="{{route('pfe.edit' , ['pfe' => $pfe->id])}}"><button type="button" class="btn btn-info"><i class="ti-new-window"></i>Modifier</button></a></td>
            {{-- <td><a href="{{route('pfe.destroy' , ['pfe' => $pfe->id])}}"><button type="button" class="btn btn-danger"><i class="ti-trash"></i>Supprimer</button></a></td> --}}
            <td> <form method="POST" action="{{route('pfe.destroy',['pfe'=>$pfe->id])}}">
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