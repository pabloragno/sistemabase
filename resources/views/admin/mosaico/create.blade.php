@extends('adminlte::page')

@section('title', 'SisTre')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="panel-body">

        {!! Form::open(['route' => 'users.store']) !!}

            @include('admin.users.partials.form')

        {!! Form::close() !!}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop