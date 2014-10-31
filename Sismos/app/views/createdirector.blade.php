@extends('layout')

@section('title')
	Crear un nuevo director
@stop
@section('script')
@stop

@section('content')
    <div ng-controller="ConsultRegisterCtrl">
        <section class="text-center">
            <h1>Crear un nuevo director</h1>
        </section>
        
        <section class="text-center">
            {{Form::open(['route'=>'createdirector','method'=>'post'])}}

            {{ $errors->first('full_name', '<span class="error">:message</span>') }}
            {{Form::text('full_name', null, ['class'=>'block block-center margin-bottom padding', 'placeholder'=>'Nombre de usuario'])}}

            <button type="submit" class="btn btn-green">Agregar</button>
            {{Form::close()}}
        </section>
        
    </div>
@stop