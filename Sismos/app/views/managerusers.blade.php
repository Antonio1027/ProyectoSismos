@extends('layout')

@section('title')
	Administrar usuarios
@stop
@section('script')
@stop

@section('content')
    <div ng-controller="ManagerCtrl">
        
        <section class="manager">
            <a href="{{route('createuser')}}" class="btn btn-green btn-new">Nuevo usuario</a>

            <h1>Administrar usuarios</h1>

            <article class="fieldsearch">                
                <input type="text" placeholder="Nombre de usuario" ng-model="username" ng-change="search()">
                <select name="" id="" ng-model="type" ng-change="search()">
                    <option value="">Seleccione un tipo de usuario</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Usuario experto">Usuario experto</option>
                    <option value="Usuario basico">Usuario basico</option>
                </select>
            </article>

            <article ng-show="users">
                <!-- ng-init="search()" -->
                <table width="100%">
                    <tr>
                        <td align="center"><strong>Nombre de usuario</strong></td>
                        <td align="center"><strong>Tipo de usuarios</strong></td>
                        <td align="center"></td>
                    </tr>
                    <tr class="user-item" ng-repeat="user in users">
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
            </article>
            <article ng-hide="users">
                <h2 class="text-center">No se encontrador usuarios</h2>
            </article>
        </section>

        <section class="manager">
            <a href="{{route('register')}}" class="btn btn-green btn-new">Nuevo Registro</a>

            <h1>Administrar registros</h1>

            <article class="fieldsearch">                
                <input type="text" placeholder="Numero de formato" ng-model="formato" ng-change="searchrecords()">
                {{Form::select('directores',$directores,null,['class'=>'','ng-model'=>'director','ng-change'=>'searchrecords()'])}}
            </article>

            <article  ng-show="registros">
                <!-- ng-init="searchrecords()" -->
                <table width="100%">
                    <tr>
                        <td align="center"><strong>Formato</strong></td>
                        <td align="center"><strong>Zona de ubicación</strong></td>
                        <td align="center"><strong>Tipo de construcción</strong></td>
                        <td align="center"></td>
                    </tr>
                    <tr class="user-item" ng-repeat="registro in registros">
                        <td>
                            <input type="text" placeholder="Nombre de usuario" ng-model="registro.formato" class="w50">
                        </td>
                        <td>
                            <input type="text" placeholder="Zona de ubicación" ng-model="registro.zona">                        
                        </td>
                        <td>
                            <input type="text" placeholder="Tipo de construcción" ng-model="registro.tipo_construccion">                        
                        </td>
                        <td>
                            <a href="updateregistro/@{{registro.id}}" class="btn btn-green">Ver / Modificar</a>
                            <a href="deleteregistro/@{{registro.id}}" class="btn btn-red" onClick="confirmar(event,'Esta seguro que quiere eliminar este registro?')">Eliminar</a>                        
                        </td>
                    </tr>
                </table>
            </article>
            <article ng-hide="registros">
                <h2 class="text-center">No se encontraron registros</h2>
            </article>
        </section>

        <section class="manager">
            <a href="{{route('createdirector')}}" class="btn btn-green btn-new">Nuevo director</a>

            <h1>Administrar directores</h1>

            <article class="fieldsearch">                
                <input type="text" class="text-center" placeholder="Nombre" ng-model="full_name" ng-change="searchdirectores()">
            </article>

            <article ng-show="directores">
                <!-- ng-init="searchdirectores()" -->
                <table width="100%">
                    <tr>
                        <td align="center"><strong>Nombre del director</strong></td>
                        <td align="center"></td>
                    </tr>
                    <tr class="user-item" ng-repeat="director in directores">
                        <td>
                            <input type="text" placeholder="Nombre de usuario" ng-model="director.full_name">
                        </td>
                        <td>
                            <a href="updatedirector/@{{director.id}}" class="btn btn-green">Ver / Modificar</a>
                            <a href="deletedirector/@{{director.id}}" class="btn btn-red" onClick="confirmar(event,'Esta seguro que quiere eliminar al usuario?')">Eliminar</a>                        
                        </td>
                    </tr>
                </table>
            </article>
            <article ng-hide="directores">
                <h2 class="text-center">No se encontrador registros</h2>
            </article>
        </section>
        

    </div>
@stop