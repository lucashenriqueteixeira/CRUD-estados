@extends("layouts.menu")

@section("title")
CRUD - Busca
@stop
@section("body")
<h3>Busca de Estados cadastrados</h3>

	<table class="table table-bordered table-hover">
		<tr class="success">
			<td>Nome</td>
			<td>Sigla</td>
			<td>Editar</td>
			<td>Deletar</td>
		</tr>
		@foreach($Dados as $Estados)
		<tr>
			<td>{{ $Estados->nome }}</td>
			<td>{{ $Estados->sigla }}</td>
			<td><a href="/editar/{{ $Estados->id }}">editar</a></td>
			<td><a href="/deletar/{{ $Estados->id }}">Deletar</a></td>
		</tr>

		@endforeach
	</table>


@stop