<?php 

class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=chromocars_db",
            "root", //Usuario de la base de datos
            "",//Contraseña de acceso a la base de datos
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
            );
        return $link;

    }


}