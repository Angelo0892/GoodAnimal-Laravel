@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')

<section class="row col-12 section_form">
    <div class="col-lg-8 m-4 form_main">
        <h3>Información de documento</h3>
        <div>
            <label for="">Titulo: </label>
            <label for="">{{$information->title}}</label>
        </div>

        <div>
            <label for="">Tipo: </label>
            <label for="">{{$information->type}}</label>
        </div>

        <div>
            <label for="">Fecha y hora: </label>
            <label for="">{{$information->date_time}}</label>
        </div>

        <section class="row imagen_animal">
            <div>
                <img class="_imagen" src="/{{$information->imagen}}" class="d-block w-100" alt="">
            </div>
        </section>

        @foreach ($subtitles as $subtitle)
            <div>
                <label for="">{{$subtitle->subtitle}}</label>
            </div>
            <div>
                <p>{!! nl2br(e($subtitle->information)) !!}</p>
            </div>
        @endforeach
        
        <div>
            <a href="{{route('admin.information.index')}}" class="btn btn-danger m-2">Volver</a>
        </div>
    </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
    
@stop