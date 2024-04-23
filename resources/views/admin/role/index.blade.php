@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

<div class="row row-cols-12">
    @can('admin.role.create')
        <a href="{{route('admin.role.create')}}" class="btn btn-info m-2">Crear</a>
    @endcan
    @include('admin.role.components.search')
</div>

    @include('admin.role.components.table')

@stop