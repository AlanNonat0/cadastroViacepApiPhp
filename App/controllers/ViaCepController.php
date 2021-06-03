<?php

namespace App\controllers;



class ViaCepController
{
    /**
     * Rota get para o index
     */
    public function home($request)
    {
        $title = "Consumo Api Via Cep";
        require __DIR__ . "/../../view/home.php";
    }

    /**
     * Rota POST processamento da api
     */
    public function save($request)
    {
        
    }

    /**
     * Rota GET erros
     */
    public function error($request){

    }

}
