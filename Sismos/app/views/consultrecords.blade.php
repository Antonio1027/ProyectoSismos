@extends('layout')

@section('title')
	Consultar registros
@stop
@section('script')
@stop

@section('content')
    <div ng-controller="ConsultRegisterCtrl">
        <section class="content">
            <h1 class="text-center">Consulta de registros</h1>
            <div class="consultrecords">
                <input type="text" class="w10" placeholder="Formato">
                <select name="" id="">
                    <option value="">¿Quien elaboro?</option>
                </select>
                <select name="" id="">
                    <option value="">Director de proyecto</option>
                </select>
                <input type="text" class="" placeholder="Cuidad">
                <input type="date" class="" placeholder="Fecha de elaboracion">
            </div>

        </section>
        <section class="content">
            <div class="fieldrecords">
                <input type="text" class="w15" placeholder="¿Quien elaboro?">
                <input type="text" class="w15" placeholder="Director de proyecto">
                <input type="text" class="w15" placeholder="Cuidad">
                <input type="date" class="w15" placeholder="Fecha de elaboracion">
                <button class="btn btn-green">Ver</button>
                <button class="btn btn-blue">Modificar</button>
                <button class="btn btn-red" onclick="confirmar(event,'¿Seguro que quiere eliminar el registro?')">Eliminar</button>
            </div>
            <div class="fieldrecords">
                <input type="text" class="w15" placeholder="¿Quien elaboro?">
                <input type="text" class="w15" placeholder="Director de proyecto">
                <input type="text" class="w15" placeholder="Cuidad">
                <input type="date" class="w15" placeholder="Fecha de elaboracion">
                <button class="btn btn-green">Ver</button>
                <button class="btn btn-blue">Modificar</button>
                <button class="btn btn-red">Eliminar</button>
            </div>
            <div class="fieldrecords">
                <input type="text" class="w15" placeholder="¿Quien elaboro?">
                <input type="text" class="w15" placeholder="Director de proyecto">
                <input type="text" class="w15" placeholder="Cuidad">
                <input type="date" class="w15" placeholder="Fecha de elaboracion">
                <button class="btn btn-green">Ver</button>
                <button class="btn btn-blue">Modificar</button>
                <button class="btn btn-red">Eliminar</button>
            </div>
            <div class="fieldrecords">
                <input type="text" class="w15" placeholder="¿Quien elaboro?">
                <input type="text" class="w15" placeholder="Director de proyecto">
                <input type="text" class="w15" placeholder="Cuidad">
                <input type="date" class="w15" placeholder="Fecha de elaboracion">
                <button class="btn btn-green">Ver</button>
                <button class="btn btn-blue">Modificar</button>
                <button class="btn btn-red">Eliminar</button>
            </div>
        </section>
        <section>
            <h2 class="text-center">No se encontrador registros</h2>
        </section>
    </div>
@stop