<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index() {
        // echo "cheguei papai";
        // die();
    }

    public function getMetrics(){
        
        $cep = array();
        $cep['adress'] = "";
        $cep['neighbour'] = "";

        $dados = array();
            $dados['name'] = "";
            $dados['code'] = "";
            $dados['cep'] = [
                $cep['adress'] = "", 
                $cep['neighbour'] = ""
            ];
            $dados['qtdd_alunos'] = "";
            $dados['pc'] = "";
            $dados['internet'] = "";
            $dados['large_band'] = "";
            $dados['total_func'] = "";
            $dados['food'] = "";

            $fp = fopen('../public/json/dadosEscolas.json', 'r');
            $archive = file_get_contents('../public/json/dadosEscolas.json');
            $decode = json_decode($archive);

    }
}
