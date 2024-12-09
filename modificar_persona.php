<?
include "modelo/conexion.php";
$id =$_GET["id"];
$sql = $conexion->query("select * from tb_persona where id=$id");

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificar_personas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3  m-auto" method="POST">
        <h3 class="text-center text-secondary">Modificar registros</h3>
        <import type="hidden" name="id" value="<?=$_GET["id"] ?>"></import>" 
        <?php
        include "controlador/actualizar_persona.php";
        while($datos=$sql->fetch_object()){?>
<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" nombre="nombre" value="<?= $datos-> nombre?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" apellido="apellido" value="<?= $datos-> apellido?>">

        </div>                  
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Documento</label>
            <input type="text" class="form-control" documento="documento" value="<?= $datos-> documento?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha</label>
            <input type="date" class="form-control" fecha="fecha" value="<?= $datos-> fecha?>">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="text" class="form-control" correo="correo" value="<?= $datos-> correo?>">

        </div>
        <?php }
        ?>
        

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Usuario </button>
    </form>
</body>

</html>