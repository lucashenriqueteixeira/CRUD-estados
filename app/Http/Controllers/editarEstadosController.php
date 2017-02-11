<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\editarEstados;

class editarEstadosController extends Controller
{
    public function select(Request $request, $id)
    {
    	$DadosEstados = editarEstados::select($id);
    	return view("editar")->with("DadosEstados",$DadosEstados);
    }

    public function editar(Request $request,$id)
    {
    	$edicao = editarEstados::editar($request,$id);

    	return redirect()->action("buscaEstadosController@select");
    }
}
