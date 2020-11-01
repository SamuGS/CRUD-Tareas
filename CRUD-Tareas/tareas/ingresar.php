<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar nabvar-expand-lg bg-primary">
    <div class="navbar brand">
        <b>REGISTRO DE TAREAS</b>
    </div>
</nav>
<br>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">
            <h1 align="center">NUEVA TAREA</h1>
            <form action="../controladores/Tareas.controlador.php?a=1" method="post">
                <div class="form-group">
                    <label for="titulo">Titulo de Tarea</label>
                    <input type="text" name="titulo" class="form-control">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea name="descripcion" class="form-control">

                    </textarea>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha de Registro</label>
                    <input type="datetime-local" class="form-control" name="fecha">
                </div>

                <input type="submit" value="AGREGAR TAREA" class="btn btn-success btn-block" name="boton">
            </form>
        </div>
    </div>
</div>
</body>
</html>