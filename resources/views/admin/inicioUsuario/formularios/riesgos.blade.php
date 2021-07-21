@extends('layouts.admin')
@section('content')
	<div class="card">
		<div class="card-header text-center" style="background-color: #00abb2;">
			<strong style="font-size: 16pt; color: #fff;"><i class="fas fa-shield-virus mr-4"></i>Riesgos identificados</strong>
		</div>
		<div class="card-body">
			<strong>INSTRUCCIONES:</strong> Por favor, conteste las siguientes preguntas y dé clickc en el botón "Enviar"

			<form class="row" method="POST" action="{{ route('admin.reportes-riesgos-store') }}">

				@csrf

				<div class="form-group mt-2 col-4">
					<label class="form-label">Nombre</label>
					<div class="form-control">{{ auth()->user()->empleado->name }}</div>
				</div>

				<div class="form-group mt-2 col-4">
					<label class="form-label">Area</label>
					<div class="form-control">{{ auth()->user()->empleado->area->area }}</div>
				</div>

				<div class="form-group mt-2 col-4">
					<label class="form-label">Puesto</label>
					<div class="form-control">{{ auth()->user()->empleado->puesto }}</div>
				</div>

				<div class="form-group mt-2 col-4">
					<label class="form-label">Correo electrónico</label>
					<div class="form-control">{{ auth()->user()->empleado->email }}</div>
				</div>

				<div class="form-group mt-2 col-4">
					<label class="form-label">Telefono</label>
					<div class="form-control">{{ auth()->user()->empleado->telefono }}</div>
				</div>

				<div class="form-group mt-2 col-4">
					<label class="form-label">Fecha y Hora</label>
					<input type="datetime-local" name="fecha" class="form-control">
				</div>

				<div class="form-group mt-2 col-6">
					<label class="form-label">Titulo corto de riesgo</label>
					<input class="form-control" name="titulo">
				</div>

				<div class="form-group mt-2 col-6">
					<label class="form-label">Proceso al que afecta</label>
					<select class="form-control" name="proceso"></select>
				</div>

				<div class="form-group mt-2 col-12">
					<label class="form-label">Describa detalladamente el riesgo identificado</label>
					<textarea name="descripcion" class="form-control"></textarea>
				</div>

				<div class="form-group mt-2 text-right col-12">
					<a href="{{ asset('admin/inicioUsuario') }}" class="btn btn_cancelar">Cancelar</a>
					<input type="submit" class="btn btn-success" value="Enviar">
				</div>

			</form>
		</div>
	</div>
@endsection