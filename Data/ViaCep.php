<?php

namespace Data;

use Error;
use Exception;

class ViaCep extends Exception
{
    public string $cep;
    public string $logradouro;
    public string $bairro;
    public string $cidade;
    public string $estado;
    public array $error;


    public function buscaPorCep($cep) : bool
    {

        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/{$cep}/json/");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $serv_out = curl_exec($ch);
            $endereco = json_decode($serv_out, $assoc = true);
            $this->setCep($endereco['cep']);
            $this->setLogradouro($endereco['logradouro']);
            $this->setBairro($endereco['bairro']);
            $this->setCidade($endereco['localidade']);
            $this->setEstado($endereco['uf']);
            curl_close($ch);

        } catch (\Throwable $th) {
            $this->error = array('erro' => $th);
            return false;
        } finally {  
            curl_close($ch);
        }

        return true;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     *
     * @return  self
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of logradouro
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set the value of logradouro
     *
     * @return  self
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get the value of bairro
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of bairro
     *
     * @return  self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get the value of cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set the value of cidade
     *
     * @return  self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }
}