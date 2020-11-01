<?php

require_once("../modelos/Conexion.clase.php");
require_once("../modelos/Tarea.clase.php");

class TareasDAO{
    public static function listarDatos(){
        $con = new Conexion();
        $informacion = $con->ejecutarConsulta("select * from tareas");
        $con->cerrarConexion();

        return $informacion;
    }

    public static function ingresarTarea($tarea){
        $con = new Conexion();
        $informacion = $con->ejecutarActualizacion("insert into tareas(titulo,descripcion,fecha_registro) values('".$tarea->titulo."','".$tarea->descripcion."','".$tarea->fecha_registro."')");
        $con->cerrarConexion();
    }

    public static function buscarTarea($id){
        $con = new Conexion();
        $informacion = $con->ejecutarConsulta("select * from tareas where idtareas = '".$id."'");
        $con->cerrarConexion();
        return $informacion[0];
    }

    public static function actualizarTarea($tarea){
        $con = new Conexion();
        $informacion = $con->ejecutarActualizacion("update tareas set titulo = '".$tarea->titulo."', descripcion = '".$tarea->descripcion."', fecha_registro = '".$tarea->fecha_registro."' where idtareas = '".$tarea->idtareas."'");
        $con->cerrarConexion();
    }

    public static function eliminarTarea($id){
        $con = new Conexion();
        $con->ejecutarActualizacion("delete from tareas where idtareas = ".$id);
        $con->cerrarConexion();
    }
}
?>