@extends("layouts.menu")

@section("body")

<h3>Cadastro de Estados</h3>
<div class="container">
<form>
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