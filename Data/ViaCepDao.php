<?php

namespace Data;

use Data\ConnectFactory;

class ViaCepDao
{
    /**
     * record the data
     * @param array $request Request from form register
     * @return string Response
     */
    public static function register(array $request) : string
    {
        $conn = Connect::getConnection();
        $error = Connect::getError();

        if ($error) {
            return "connecterror";
        } else {
            $sql = "INSERT INTO address (`name`, `cep`, `public_place`, `numb`, `district`, `city`, `state`) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(1, $request['name']);
            $stmt->bindValue(2, $request['cepRegister']);
            $stmt->bindValue(3, $request['public-place']);
            $stmt->bindValue(4, $request['numb']);
            $stmt->bindValue(5, $request['district']);
            $stmt->bindValue(6, $request['city']);
            $stmt->bindValue(7, $request['state']);
            $stmt->execute();
            return "success";
        }


    }
}