@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

    @can('admin.user.create')
        <a href="{{route('admin.user.create')}}">Creacion</a>
    @endcan
    

    @include('admin.user.components.table')
@stop

@section('css')
    
@stop

@section('js')
    
@stop