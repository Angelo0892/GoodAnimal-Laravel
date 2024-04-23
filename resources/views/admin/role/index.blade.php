@extends('adminlte::page')

@section('css')
    
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    @can('admin.role.create')
        <a href="{{route('admin.role.create')}}">Crear</a>
    @endcan
    
    @include('admin.role.components.table')

@stop