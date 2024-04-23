@extends('adminlte::page')

@section('css')
    
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    
    <section>
        <h3>FORMULARIO PARA CREAR ROLES</h3>
        <form method="POST" action="{{route('admin.role.store')}}" >
            @csrf

            @include('admin.role.components.form')
        </form>
    </section>

@stop