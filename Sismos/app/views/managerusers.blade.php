@extends('layout')

@section('title')
	Administrar usuarios
@stop
@section('script')
@stop

@section('content')
    <div ng-controller="ManagerUsersCtrl">
        <section class="text-center" ng-hide="newuser">
            <h1>Agregar</h1>
            <button class="btn btn-green" ng-click="newuser = !newuser">Nuevo usuario</button>
            <!-- <a href="{{route('createuser')}}" class="btn btn-green">Nuevo usuario</a> -->
            <a href="{{route('createuser')}}" class="btn btn-green">Nuevo director</a>
        </section>
        <section class="text-center blur" ng-if="newuser">
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
        <section class="text-center">
            <h1>Administrar usuarios</h1>
            <input type="text" placeholder="Nombre de usuario" ng-model="username" ng-change="search()">
            <select name="" id="" ng-model="type" ng-change="search()">
                <option value="">Seleccione un tipo de usuario</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuario experto">Usuario experto</option>
                <option value="Usuario basico">Usuario basico</option>
            </select>
        </section>

        <section ng-init="search()" ng-show="users">
            <table width="100%">
                <tr>
                    <td align="center"><strong>Nombre de usuario</strong></td>
                    <td align="center"><strong>Tipo de usuarios</strong></td>
                    <td align="center"></td>
                </tr>
                <tr class="user-item" ng-repeat="user in users">
                    @{{user.id}}
                    <td>
                        <input type="text" placeholder="Nombre de usuario" ng-model="user.username">
                    </td>
                    <td>
                        <input type="text" placeholder="Tipo de usuario" ng-model="user.type">                        
                    </td>
                    <td>
                        <a href="updateuser/@{{user.id}}" class="btn btn-green">Ver / Modificar</a>
                        <a href="deleteuser/@{{user.id}}" class="btn btn-red" onClick="confirmar(event,'Esta seguro que quiere eliminar al usuario?')">Eliminar</a>                        
                    </td>
                </tr>
            </table>
        </section>

        <section ng-hide="users">
            <h2 class="text-center">No se encontrador usuarios</h2>
        </section>
    </div>
@stop