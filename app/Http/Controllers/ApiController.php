<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index() {
        return view("index");
    }

    public function getMetrics(){
        
        $cep = array();
        $cep['adress'] = "";
        $cep['neighbour'] = "";

        $dados = array();

        $fp = fopen('../public/json/dados_Computador.json', 'r');
        $archive = file_get_contents('../public/json/dados_Computador.json');
        $decode = json_decode($archive, true);
        // dd($decode);
        $decComp = array();

        for ($i = 1; $i <= sizeof($decode); $i++){
               $decComp = $decode['computadores'];
        }

        $max = sizeof($decComp);
        $qtdComp = array_sum($decComp);

        $finalData = $qtdComp / $max;

        $finalData = round($finalData, 2);
        
        return view('metrics', ['finalData' => $finalData]);
    }
}
