<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\buscaEstados;

class buscaEstadosController extends Controller
{
	
    public function select()
    {
    	$Dados = buscaEstados::selectBusca();
    	return view("busca")->with("Dados",$Dados);
    }
}
