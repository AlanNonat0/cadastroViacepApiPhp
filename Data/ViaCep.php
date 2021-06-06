<?php

namespace Data;

use Exception;

class ViaCep
{
    private string $cep;
    private string $publicPlace;
    private string $district;
    private string $city;
    private string $state;


    /**
     * search for zip code and assign values ​​to object
     * @param $cep
     * @return void
     */
    public function findCep($cep) : void
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/{$cep}/json/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $serv_out = curl_exec($ch);
        $address = json_decode($serv_out, $assoc = true);
        if (!empty($address)) {

            $this->setCep($address["cep"]);
            $this->setPublicPlace($address["logradouro"]);
            $this->setDistrict($address["bairro"]);
            $this->setCity($address["localidade"]);
            $this->setState($address["uf"]);
        } else {
            throw new Exception("CEP Não encontrado", 1);
        }
    }



    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
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
     * Get the value of publicPlace
     */
    public function getPublicPlace()
    {
        return $this->publicPlace;
    }

    /**
     * Set the value of publicPlace
     *
     * @return  self
     */
    public function setPublicPlace($publicPlace)
    {
        $this->publicPlace = $publicPlace;

        return $this;
    }

    /**
     * Get the value of district
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set the value of district
     *
     * @return  self
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @return  self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

}
