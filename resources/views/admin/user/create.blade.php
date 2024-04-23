@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

    <section class="row col-12 section_form">
        <div class="col-lg-8 m-4">
            <form action="{{route('admin.user.store')}}" method="POST" class="col-lg-12 form_main">
                <h3>CREAR DOCUMENTO</h3>
                @csrf
    
                @include('admin.user.components.form')
            </form>
        </div>
    </section> 
    
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    
@stop