<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pessoas;

class PessoasController extends Controller
{
    public static function index()
    {
        $pessoas = Pessoas::all();
        return $pessoas;
    }

    public function novo()
    {
        return view('pessoas.novo');
    }

    public function store(Request $request)
    {   
        return $request;
        Pessoas::create($request->all());
    }

    public function editar($id)
    {
        $pessoas = Pessoas::find($id);
        return $pessoas;
    }

    public function edit(Request $request, $id)
    {
        $pessoas = Pessoas::find($id);
        $pessoas->nome = $request['nome'];
        $pessoas->data = $request['data'];
        $pessoas->peso = $request['peso'];
        $pessoas->sexo = $request['sexo'];
        $pessoas->cpf = $request['cpf'];
        $pessoas->save();
        return;
    }

    public function excluir($id)
    {
        $pessoas = Pessoas::find($id);
        $pessoas->delete();
        return;
    }
}
