<?php

namespace App\controllers;

use Data\ViaCep;
use CoffeeCode\Router\Router;
use Data\ViaCepDao;

class ViaCepController
{
    /**
     * GET: route for home page and API processing
     * @param array $request
     * @return void
     */
    public function home($request)
    {
        $title = "Consumo Api Via Cep";

        $router = new Router(URL_BASE);
        if (isset($_POST['search']) && $request['search'] == "cep") {
            $findCep = new ViaCep();
            $cep = filter_var($request['cep'], FILTER_SANITIZE_NUMBER_INT);
            try {
                $findCep->findCep($cep);
            } catch (\Throwable $th) {

                $router->redirect("/ceperror");
            }

            $address = $findCep;
            require __DIR__ . "/../../view/home.php";
        } else {
            require __DIR__ . "/../../view/home.php";
        }
    }

    /**
     * POST: route for save data
     * @param array $request
     * @return void $request
     */
    public function save($request)
    {
        $alert = null;

        # removing the mask
        $request['cepRegister'] = str_replace("-", "", $request['cepRegister']);
        $router = new Router(URL_BASE);
        if (isset($_POST['action']) && $request['action'] == "register") {
            foreach ($request as $key => $value) {
                if (empty($value) && $key != 'complement' && $key != 'numb') {
                    $alert = "/emptyfield";
                    $router->redirect($alert);
                }
            }

            $alert = ViaCepDao::register($request);
        }

        $router->redirect($alert);
    }

    /**
     * GET: route for error handling
     * @param array $request
     * @return void
     */
    public function error($request)
    {
        $error = $request;
         $title = "{$error['errcode']} | Consumo Api Via Cep";
        require __DIR__ . "/../../view/error.php";
    }
}
