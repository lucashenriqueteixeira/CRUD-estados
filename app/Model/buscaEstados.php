<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class buscaEstados extends Model
{
	/**
	*Classe faz um select de todos os dados
	* @return array $Dados
	*/
    public static function selectBusca()
    {
    	$Dados = DB::table("estados")->get();

    	return $Dados;
    }
}
