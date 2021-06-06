<?php

namespace Data;

use PDO;
use PDOException;

/**
 * Class Connect
 */
class Connect
{
    /** @var PDO */
    private static $instance;

    /** @var PDOException */
    private static $error;

    /**
     * @return PDO
     */
    public static function getConnection() : ?PDO
    {
        if (empty(self::$instance)) {
            try{
                self::$instance = new PDO(
                    DATABASE_CONFIG["driver"].":host=".DATABASE_CONFIG["host"].";dbname=".DATABASE_CONFIG["dbname"].";port".DATABASE_CONFIG["port"],
                    DATABASE_CONFIG["username"],
                    DATABASE_CONFIG["password"],
                    DATABASE_CONFIG["options"]
                );
            } catch (PDOException $except) {
                self::$error = $except;
            }
        }
        return self::$instance;
    }


    /**
     * @return PDOException|null
     */ 
    public static function getError()
    {
        return self::$error;
    }
}