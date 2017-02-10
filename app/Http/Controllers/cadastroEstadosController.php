<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\cadastroEstados;
use App\Http\Requests\cadastroEstadosValidation;


class cadastroEstadosController extends Controller
{
    public function SalvaCadastro(Request $Dados,cadastroEstadosValidation $Request)
    {
    	//faz o cadastro
    	$Dados = cadastroEstados::Saves($Dados);
    	
    	//verifica se foi cadastrado e retorna o nome do estado cadastrado
    	$Nome = cadastroEstados::nomeEstado($Dados);

    	if($Nome == true)
    	{
    		return view('cadastro')->with('Nome',$Nome);
    	}
    	else
    	{
    		$Nome = "Erro";
    		return view("cadastro")->with("Nome",$Nome);
    	}
    }
}
