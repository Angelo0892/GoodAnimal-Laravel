@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    Información de documento
@stop

@section('content')

    <div>
        <label for="">Titulo: </label>
        <label for="">{{$information->title}}</label>
    </div>

    <div>
        <label for="">Tipo: </label>
        <label for="">{{$information->type}}</label>
    </div>

    <div>
        <label for="">Fecha y hora: </label>
        <label for="">{{$information->date_time}}</label>
    </div>
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop