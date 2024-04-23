@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

<div class="row row-cols-12">
    @can('admin.information.create')
        <a href="{{route('admin.information.create')}}" class="btn btn-info m-2">Crear</a>
    @endcan
    @include('admin.information.components.search')
</div>
   


    @include('admin.information.components.table')
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    
@stop