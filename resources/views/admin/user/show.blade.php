@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

<section class="row col-12 section_form">
    <div class="col-lg-8 m-4 form_main">
        <h3>Información de usuario</h3>
        <div>
            <label for="">Nombre: </label>
            <label for="">{{$user->name}}</label>
        </div>
        
        <div>
            <label for="">Email: </label>
            <label for="">{{$user->email}}</label>
        </div>

        <div>
            <a href="{{route('admin.user.index')}}" class="btn btn-danger">Volver</a>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    
@stop