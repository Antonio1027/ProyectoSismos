@extends('layout')

@section('title')
	Iniciar sesíon
@stop
@section('script')
@stop

@section('content')
    <div ng-controller="ConsultRegisterCtrl">
		<section class="text-center">
			<h1>Iniciar sesíon</h1>
		</section>
        <section class="text-center">
            {{ Form::open(['route'=>'authuser','method'=>'post']) }}

                {{ Form::text('username', null, ['placeholder'=>'Nombre de usuario','class'=>'block block-center margin-bottom padding']) }}
                {{ Form::password('password', ['placeholder'=>'Contraseña', 'class'=>'block block-center margin-bottom padding']) }}
                {{ Form::Checkbox('remember',1,null,['class'=>'inline'])}} <label for="remember"> Mantener la sesión 
                @if( Session::has('login_error'))
                    <span class="block error">Error de inicio de sesión. Comprueba tu nombre de usuario e introduce la contraseña nuevamente.</span>          
                @endif
                <br>
                <br>
                <br>
                <button type="submit" class="btn btn-green">Ingresar</button>
            {{Form::close()}}
        </section>
        
    </div>
@stop