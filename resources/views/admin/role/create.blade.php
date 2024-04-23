@extends('adminlte::page')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')

@stop  

@section('title', 'index')

@section('content')

    
    <section class="row col-12 section_form">
        <div class="col-lg-8 m-4">
            <form method="POST" action="{{route('admin.role.store')}}" class="col-lg-12 form_main">
                <h3>CREAR ROL</h3>
                @csrf

                @include('admin.role.components.form')
            </form>
        </div>
    </section>

@stop