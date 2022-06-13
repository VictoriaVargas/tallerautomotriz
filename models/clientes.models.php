<?php 
require_once "conexion.php";

class ModeloClientes{

    static public function mdlCrearCliente($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_comuna,rut,nombre,direccion,correo,telefono) VALUES (:id_comuna,:rut,:nombre,:direccion,:correo,:telefono)");
        $stmt -> bindParam(":id_comuna", $datos["comuna"], PDO::PARAM_STR);
        $stmt -> bindParam(":rut", $datos["rut"], PDO::PARAM_STR);
        $stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt -> bindParam(":direccion", $datos["direccion"], PDO::PARAM_STR);
        $stmt -> bindParam(":correo", $datos["email"], PDO::PARAM_STR);
        $stmt -> bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return  "error";
        }

        $stmt->close();
        $stmt = null;

    }


}