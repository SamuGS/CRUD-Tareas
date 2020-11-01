<?php require_once "../dao/Tareas.dao.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!------------ DATA TABLES CSS ------>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary">
    <b><label class="navbar-brand">REGISTRO DE TAREAS</label></b>
</nav>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <center>
                <h1><b>REGISTRO DE TAREAS</b></h1>
            </center>
            <a href="ingresar.php"><button class="btn btn-info btn-block">Nueva Tarea</button></a>
        </div>
        <div class="col-md-8">
            <table class="table table-striped table-bordered" id="tablaTareas" style="width: 100%">
                <thead>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Fecha de Registro</th>
                <th>Opciones</th>
                </thead>
                <tbody>
                <?php

                foreach (TareasDAO::listarDatos() as $info){
                    echo "<tr>";
                        echo "<td>";
                            echo $info[1];
                        echo "</td>";

                        echo "<td>";
                            echo $info[2];
                        echo "</td>";

                        echo "<td>";
                            echo $info[3];
                        echo "</td>";

                        echo "<td>";
                            echo "<a href='editar.php?id=".$info[0]."' class='btn btn-warning btn-block'>Editar</a>";
                            ?>
                            <a href="../controladores/Tareas.controlador.php?a=3&id=<?php echo $info[0]; ?>" onclick="return confirm('¿Esta seguro de eliminar?')" class="btn btn-danger btn-block">Eliminar</a>
                <?php
                        echo "</td>";
                    echo "</tr>";
                }

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!----- CDN DATATABLE ------------>
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"> </script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"> </script>

<script>
    $(document).ready(function() {
        $('#tablaTareas').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        } );
    } );
</script>

</body>
</html>