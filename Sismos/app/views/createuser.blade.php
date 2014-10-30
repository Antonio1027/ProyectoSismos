@extends('layout')

@section('title')
	Administrar usuario
@stop
@section('script')
@stop

@section('content')
    <div ng-controller="ConsultRegisterCtrl">
        <section class="text-center">
            <h1>Administrar usuario</h1>
        </section>
        
        <section class="text-center">
            {{Form::open(['route'=>'createuser','method'=>'post'])}}

            {{ $errors->first('username', '<span class="error">:message</span>') }}
            {{Form::text('username', null, ['class'=>'block block-center margin-bottom padding', 'placeholder'=>'Nombre de usuario'])}}

            {{ $errors->first('password', '<span class="error">:message</span>') }}
            {{Form::password('password', ['class'=>'block block-center margin-bottom padding', 'placeholder'=>'Contraseña'])}}

            {{ $errors->first('password_confirmation', '<span class="error">:message</span>') }}
            {{ Form::password('password_confirmation', ['class'=>'block block-center margin-bottom padding', 'placeholder'=>'Confirmar contraseña']) }}

            {{ $errors->first('type', '<span class="error">:message</span>') }}
            {{Form::select('type',[
                ''=>'Selecciona un tipo de usuario',
                'Administrador'=>'Administrador',
                'Usuario experto'=>'Usuario experto',
                'Usuario basico'=>'Usuario basico',
            ], null,['class'=>'block block-center margin-bottom padding'])}}

            <button type="submit" class="btn btn-green">Agregar</button>
            {{Form::close()}}
        </section>
        
    </div>
@stop