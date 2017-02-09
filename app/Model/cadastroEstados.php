<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class cadastroEstados extends Model
{
	/**
	* @return bolean
	* @param array $Campos
	*/
    public static function Saves($Campos)
    {
    	$Dados = DB::table("estados")->
    					insert([
    						['nome' => $Campos->input('nome'),
    						'historico' => $Campos->input('historico'),
    						'sigla' => $Campos->input('sigla')]
    						]);
    }
}
