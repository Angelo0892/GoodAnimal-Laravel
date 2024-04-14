@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    Modificar documento
@stop

@section('content')

    <form action="{{route('admin.user.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')

        @include('admin.user.components.form')
    </form>
    
@stop

@section('css')
    
@stop

@section('js')
    
@stop