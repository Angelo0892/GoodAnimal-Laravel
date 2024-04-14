@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    Modificar documento
@stop

@section('content')

    <form action="{{route('admin.information.update', $information->id)}}" method="POST">
        @csrf
        @method('PUT')

        @include('admin.information.components.form')
    </form>
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop