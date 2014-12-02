@extends('layout')

@section('title')
	Login
@stop
@section('script')
@stop

@section('content')
    <div ng-controller="ConsultRegisterCtrl">
		<section class="home text-center">
			<h1>Base de datos para el estudio de vulnerabilidad sísmica</h1>			
		</section>
		<footer>
			<div class="about">
				<div class="cols3">
					<p>M.I. Raúl González Herrera</p>
					<p>Ingeniería Ambiental</p>
					<p>Universidad de Ciencias y Artes de Chiapas</p>
				</div>						
				<div class="cols3">
					<p>M.C. Jorge A. Aguilar Carboney</p>
					<p>Facultad de Ingeniería Universidad Autónoma de Chiapas</p>
				</div>						
				<div class="cols3">
					<p>Programacion</p>
					<p>ISC. Ricardo Gabriel Suárez Gómez</p>
					<p>Facultad de Ingeniería Universidad Autónoma de Chiapas</p>
				</div>			
				<div class="cols1">
					<p>Modulo de captura y beta testing</p>
					<p>Jóse Adolfo López Sanchez</p>
					<p>Instituto Tecnologico Superior de Cd. Hidalgo</p>
				</div>
			</div>
		</footer>
    </div>
@stop