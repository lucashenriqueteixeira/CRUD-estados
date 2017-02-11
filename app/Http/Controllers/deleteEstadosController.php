<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\deleteEstados;

class deleteEstadosController extends Controller
{
	public function delete($id)
	{
		deleteEstados::deletar($id);

		return redirect()->action("buscaEstadosController@select");
	}
    
}
