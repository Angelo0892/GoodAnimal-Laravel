@extends('adminlte::page')

@section('css')   
@stop

@section('js')
@stop

@section('title', 'creacionServicio')

@section('content')

    <section>
        <form method="POST" action="{{route('admin.role.update', $role)}}" >
            @csrf

            @method('PUT')
           
            @include('admin.role.components.form')

        </form>
    </section>

@endsection