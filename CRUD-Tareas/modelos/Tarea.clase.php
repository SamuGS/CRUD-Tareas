<?php

class Tarea{
    public $idtareas;
    public $titulo;
    public $descripcion;
    public $fecha_registro;

    public function __construct(){
        $this->idtareas = 0;
        $this->titulo = "";
        $this->descripcion = "";
        $this->fecha_registro = "";
    }
}

?>