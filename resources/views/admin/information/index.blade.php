@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

    @can('admin.information.create')
        <a href="{{route('admin.information.create')}}">Creacion</a>
    @endcan
    
    @include('admin.information.components.table')
@stop

@section('css')
    
@stop

@section('js')
    
@stop