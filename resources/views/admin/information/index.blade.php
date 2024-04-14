@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

    <a href="{{route('admin.information.create')}}">Creacion</a>

    @include('admin.information.components.table')
@stop

@section('css')
    
@stop

@section('js')
    
@stop