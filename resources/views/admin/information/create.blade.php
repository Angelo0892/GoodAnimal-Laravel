@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    Crear nuevo documento
@stop

@section('content')

    <form action="{{route('admin.information.store')}}" method="POST">
        @csrf

        @include('admin.information.components.form')
    </form>
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop