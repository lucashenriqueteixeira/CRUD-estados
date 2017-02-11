@extends("layouts.menu")

@section("title")
CRUD - Editar -
@stop
@section("body")

<h3>Edição de Estados</h3>
<div class="container">
<form method="POST" action="/editarexecutar/{{ $DadosEstados[0]->id }}">

{{ csrf_field() }}

@if(isset($Nome))
	<div class="alert alert-info">
		Estado: {{ $Nome[0]->nome }} cadastrado com sucesso!
	</div>
@endif

<?php
	unset($Nome);
?>	

@if(count($errors) > 0)
	<div class="alert alert-warning">
	<ul>
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	</div>

@endif

	<div class="row">
		<div class="col-xs-4">
			<label>Nome Estado</label>
			<input class="form-control" value="{{ $DadosEstados[0]->nome }}" type="text" name="nome" required="required">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-2">
			<label>Sigla</label>
			<input class="form-control" value="{{ $DadosEstados[0]->sigla }}" type="text" name="sigla" required="required" maxlength="2">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-5">
		<label>Historico</label>
			<textarea name="historico" required="required" class="form-control">{{ $DadosEstados[0]->historico }}</textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-2">
			<input class="btn btn-warning" type="submit" value="Editar" name="editar">
		</div>
	</div>
</form>	
</div>
@stop