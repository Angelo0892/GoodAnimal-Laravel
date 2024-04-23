@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    Modificar documento
@stop

@section('content')

    <div>
        <label for="">Nombre: </label>
        <label for="">{{$user->name}}</label>
    </div>
     
    <div>
        <label for="">Email: </label>
        <label for="">{{$user->email}}</label>
    </div>

    <div>
        <a href="{{route('admin.user.index')}}">Volver</a>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop