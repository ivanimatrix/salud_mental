@extends('layouts.app')

@section('htmlheader_title')
    Inicio
@endsection

@section('contentheader_title')
    Inicio
@endsection
@section('contentheader_description')
    Dashboard
@endsection

@section('main-content')
	<div class="row">
		<div class="col-xs-12 col-md-4">
			<div class="box box-primary">
				<div class="box-header">
					<div class="box-title">
						Últimos eventos
					</div>
				</div>	
			</div>
		</div>

		<div class="col-xs-12 col-md-8">
			<div class="box box-primary">
				<div class="box-header with-border">
					<div class="box-title">Bandeja de Trabajo</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('js-code')
	<script type="text/javascript" src="{{ url ('public/js/modulo/home/dashboard.js') }}" ></script>
@endsection

