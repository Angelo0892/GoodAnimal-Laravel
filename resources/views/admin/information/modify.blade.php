@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

<section class="row col-12 section_form">
    <div class="col-lg-8 m-4">
        <form action="{{route('admin.information.update', $information->id)}}" method="POST" enctype="multipart/form-data" class="col-lg-12 form_main">
            <h3>Modificar documento</h3>
            @csrf
            @method('PUT')

            @include('admin.information.components.form')
        </form>
    </div>
</section>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    
@stop