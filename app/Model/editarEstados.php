<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class editarEstados extends Model
{
    public static function select($ID)
    {
    	$Dados = DB::table("estados")->where("id","=",$ID)->get();

    	return $Dados;
    }

    public static function editar($request,$ID)
    {
    	$Editar = DB::table("estados")->where("id","=",$ID)
    						->update([
    									"nome" => $request->input("nome"),
    									"sigla" => $request->input("sigla"),
    									"historico" => $request->input("historico")
    								]);
    }
}
