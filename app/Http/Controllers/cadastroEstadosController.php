<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\cadastroEstados;
use App\Http\Requests\cadastroEstadosValidation;


class cadastroEstadosController extends Controller
{
    public function SalvaCadastro(Request $Dados)
    {
    	cadastroEstados::Saves($Dados);
    }
}
