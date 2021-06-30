@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    Examens
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
Examens
@stop
<!-- breadcrumb -->
@endsection
@section('content')

@if(session()->has('statut'))
      <h3 style="color: green">
        {{ session()->get('statut')}}
      </h3>
@endif
<a href="{{ route('examen.create') }}"><button type="button" class="btn btn-success"><i class="ti-plus"></i>Ajouter Exam</button></a>
    <!-- row -->
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id Examen</th>
            <th scope="col">Id Etudiant</th>
            <th scope="col">Id Module</th>
            <th scope="col">Note Examen</th>
            <th scope="col">Date Examen</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
          </tr>
        </thead>
        <tbody>
    
     @foreach($data_exam as $examen) 
    
          <tr>
            <th scope="row">{{$examen->id}}</th>
            <td>{{$examen->id_etd}}</td>
            <td>{{$examen->id_module}}</td>
            <td>{{$examen->Note_Examen}}</td>
            <td>{{$examen->Date_Examen}}</td>
            <td><a href="{{route('examen.edit' , ['examan' => $examen->id])}}"><button type="button" class="btn btn-info"><i class="ti-new-window"></i>Modifier</button></a></td>
            {{-- <td><a href="{{route('Professeur.destroy' , ['Professeur' => $professeur->id])}}"><button type="button" class="btn btn-danger"><i class="ti-trash"></i>Supprimer</button></a></td> --}}
            <td> <form method="POST" action="{{route('examen.destroy',['examan'=>$examen->id])}}">
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