@extends('adminlte::page')

@section('css')   
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <section class="row col-12 section_form">
        <div class="col-lg-8 m-4">
            <form method="POST" action="{{route('admin.role.update', $role)}}" class="col-lg-12 form_main">
                <h3>MODIFICAR ROL</h3>
                @csrf

                @method('PUT')
            
                @include('admin.role.components.form')

            </form>
        </div>
    </section>

@endsection