<?php

class Conexion{

    public function conectar(){
        $host = "localhost";
        $user = "root";
        $password = "root";
        $db = "producto";
        $conexion = mysqli_connect($host, $user, $password, $db);

        if($conexion == false){
            die("ERROR".mysqli_connect_error);
        }
        return $conexion;
    }
}