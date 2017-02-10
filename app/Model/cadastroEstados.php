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
        //faz o cadastro no banco
    	$Dados = DB::table("estados")->insertGetId
        (
    		[
                'nome' => $Campos->input('nome'),
                'historico' => $Campos->input('historico'),
                'sigla' => $Campos->input('sigla')
            ]
        );

        //verifica se foi cadastrado
    	if($Dados == true)
        {
            return $Dados;
        }
        else
        {
            return false;
        }
    }
    public static function nomeEstado($ID)
    {
        $Nome = DB::table("estados")->select('nome')->where('id', '=', $ID)->get();

        return $Nome;
    }   
}
