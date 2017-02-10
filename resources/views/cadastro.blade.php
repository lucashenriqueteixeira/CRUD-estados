@extends("layouts.menu")

@section("body")

<h3>Cadastro de Estados</h3>
<div class="container">
<form method="POST" action="/realizandocadastro">

{{ csrf_field() }}
@if(isset($Nome))
	{{ $Nome[0]->nome }}

@endif

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
			<input class="form-control" type="text" name="nome" required="required">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-2">
			<label>Sigla</label>
			<input class="form-control" type="text" name="sigla" required="required" maxlength="2">
		</div>
	</div>

	<div class="row">
		<div class="col-xs-5">
		<label>Historico</label>
			<textarea name="historico" required="required" class="form-control"></textarea>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-2">
			<input class="btn btn-warning" type="submit" name="enviar">
		</div>
	</div>
</form>	
</div>
@stop