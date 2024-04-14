@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    Crear nuevo documento
@stop

@section('content')

    <form action="{{route('admin.user.store')}}" method="POST">
        @csrf

        @include('admin.user.components.form')
    </form>
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop