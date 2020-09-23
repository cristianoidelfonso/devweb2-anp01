<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index(){
        return view('admin.layouts.conteudo-inicial');
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
                    'Jeep Renegade' => 'Balanceamento e alinhamento',
                    'Fox' => 'Troca de correia, filtros e oleo',
                    'Belina' => 'Rastreamento de pane eletrica',
                    'HB20' => 'Rastreamento de pane eletrica',
                    'EcoSport' => 'Rastreamento de pane eletrica',
                    'Saveiro' => 'Rastreamento de pane eletrica',
                    'Jeep Compass' => 'Rastreamento de pane eletrica',
                    'Frontier' => 'Rastreamento de pane eletrica',
                    'Virtus' => 'Rastreamento de pane eletrica',
                    'Chevet' => 'Troca de embreagem'];

        $acoes = ['Editar' => '/editar', "Concluido" => '/concluido', 'Excluir' => '/excluir'];

        return view('admin.veiculos.index', compact('sobre', 'carros', 'acoes'));
    }

    public function sobre(){
        return view('admin.layouts.sobre', ['texto'=> "Página sobre a empresa"]);
    }

    public function contato(){
        return view ('admin.layouts.contato')->with('word1', 'Página')->with('word2', 'de')->with('word3', 'contato');
    }
}
