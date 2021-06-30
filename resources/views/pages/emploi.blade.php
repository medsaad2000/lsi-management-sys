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

<form method="POST" enctype="multipart/form-data" id="upload-file" action="{{ url('emploi.store') }}" >
                 
    <div class="row">

        <div class="col-md-12">
            <h1>Upload Emploi du temps</h1>
            <div class="form-group">
                <input type="file" name="file" placeholder="Choose file" id="file">
                  @error('file')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
            </div>
        </div>
           
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
    </div>     
</form>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection