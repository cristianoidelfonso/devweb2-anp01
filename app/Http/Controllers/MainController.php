<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        return view('admin.layouts.principal');
    }

    public function cadastrar(){
        $texto = 'Cadastrar novo serviço';
        return view('admin.servicos.index', compact('texto'));
    }

    public function listar(){

        $sobre = "Página descritiva";
        $carros = ['Palio' =>'Trocar pneus',
                    'Uno' => 'Balanceamento e alinhamento',
                    'Siena' => 'Troca de correia, filtros e oleo',
                    'Toro' => 'Rastreamento de pane eletrica',
                    'Punto' => 'Troca de embreagem',
                    'Classic' =>'Trocar pneus',
                    'Renegade' => 'Balanceamento e alinhamento',
                    'Fox' => 'Troca de correia, filtros e oleo',
                    'S10' => 'Rastreamento de pane eletrica',
                    'Chevet' => 'Troca de embreagem'];

        return view('admin.veiculos.index', compact('sobre', 'carros'));
    }

    public function sobre(){
        return view('admin.layouts.sobre', ['texto'=> "Página sobre a empresa"]);
    }

    public function contato(){
        return view ('admin.layouts.contato')->with('word1', 'Página')->with('word2', 'de')->with('word3', 'contato');
    }
}
