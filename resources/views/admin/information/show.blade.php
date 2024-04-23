@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    Información de documento
@stop

@section('content')

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

    <div>
        <label for="" class="product-label">Imagen del Documento:</label>
        <img src="/{{$information->imagen}}" alt="Imagen del producto" class="product-image">
    </div>

    @foreach ($subtitles as $subtitle)
        <div>
            <label for="">{{$subtitle->subtitle}}</label>
        </div>
        <div>
            <p>{!! nl2br(e($subtitle->information)) !!}</p>
        </div>
    @endforeach
    
    <div>
        <a href="{{route('admin.information.index')}}">Volver</a>
    </div>
@stop

@section('css')
    
@stop

@section('js')
    
@stop