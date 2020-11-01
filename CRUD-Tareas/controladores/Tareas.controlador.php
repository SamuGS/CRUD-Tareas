<?php

require_once "../dao/Tareas.dao.php";
require_once "../modelos/Tarea.clase.php";

if($_GET['a']==1){
    $t = new Tarea();
    $t->titulo = $_POST['titulo'];
    $t->descripcion = $_POST['descripcion'];
    $t->fecha_registro = $_POST['fecha'];
    TareasDAO::ingresarTarea($t);
}

if($_GET['a']==2){
    $t = new Tarea();
    $t->idtareas = $_POST['id'];
    $t->titulo = $_POST['titulo'];
    $t->descripcion = $_POST['descripcion'];
    $t->fecha_registro = $_POST['fecha'];
    TareasDAO::actualizarTarea($t);
}

if($_GET['a']==3){
    $id = $_GET['id'];
    TareasDAO::eliminarTarea($id);
}

header("location: ../tareas/index.php");

?>