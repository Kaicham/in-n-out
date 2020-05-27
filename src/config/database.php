<?php

class DataBase {
    public static function getConnection() {
        // Acessando o caminho do arquivo database.php e voltando uma pasta pra acessar o env.ini
        $path = realpath(dirname(__FILE__) . "/../env.ini");
        $env = parse_ini_file($path);

        $connection = new mysqli($env['host'], $env["username"], $env["password"], $env["database"]);
        if($connection->connect_error){
            die("ERRO: " . $connection->connect_error);
        }

        return $connection;
    }

    public static function getResultFromQuery($sql) {
        $connection = self::getConnection();
        $result = $connection->query($sql);
        $connection->close();
        return $result;
    }
}