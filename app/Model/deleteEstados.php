<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class deleteEstados extends Model
{
    public static function deletar($ID)
    {
    	DB::table("estados")->where("id","=",$ID)->delete();
    }
}
