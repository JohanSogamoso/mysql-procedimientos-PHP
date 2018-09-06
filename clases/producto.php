<?php

class Producto{

    public function registra($conexion, $nombre, $descripcion, $codigo, $valorUni){
        $query = "CALL registrar_producto('$nombre', '$descripcion', '$codigo', $valorUni)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Usuario registrado";
        }else{
            $respuesta = "Problemas al registar";
        }
        return $respuesta;
    }

    public function consultar($conexion){
        $query = "CALL consultar_producto";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultaId($conexion, $id){
        $query = "consultar_producto_id($id)";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function editar($conexion, $nombre, $descripcion, $codigo, $valorUni, $id){
        $query = "CALL editar_producto('$nombre', '$descripcion', '$codigo', $valorUni, $id)";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Actualizado con exito";
        }else{
            $respuesta = "Problemaa al actualizar";
        }
        return $respuesta;
    }

    public function eliminar($conexion, $id){
        $query = "DELETE FROM producto WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        if($consulta){
            $respuesta = "Producto eliminado";
        }else{
            $respuesta = "Problemas al eliminar";
        }
        return $respuesta;
    }

}