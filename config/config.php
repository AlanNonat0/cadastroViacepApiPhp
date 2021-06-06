<?php
# Define localhost
require_once "ConfigUrl.php";

$urlbase = ConfigUrl::protocol().$_SERVER['HTTP_HOST'].ConfigUrl::scriptName();
define("URL_BASE", $urlbase);

# Data base config
define("DATABASE_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "db_addresses",
    "username" => "root",
    "password" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

# Helper: get URL_BASE.
/**
 * @param string|null $uri
 * @return string
 */
function url(string $uri = null): string
{
    if ($uri) {
        return URL_BASE . "{$uri}";
    }

    return URL_BASE;
}
