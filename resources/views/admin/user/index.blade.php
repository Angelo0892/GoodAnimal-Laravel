@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

    <a href="{{route('admin.user.create')}}">Creacion</a>

    @include('admin.user.components.table')
@stop

@section('css')
    
@stop

@section('js')
    
@stop