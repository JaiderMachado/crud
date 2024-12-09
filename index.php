<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curd php y MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/bc87df94ab.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function eliminar(){
            var respuesta = confim("¿Està seguro de querer eliminar el registro?");
            return respuesta
        }
    </script>
    <h1 class="text-center p-3">Modulo reguistrar usduarios</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_persona.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3  m-auto" method="POST">
            <h3 class="text-center text-secondary">Registro de personas</h3>
            <?php
           
            include "controlador/registro_persona.php"; 
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" nombre="nombre" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellido</label>
                <input type="text" class="form-control" apellido="apellido" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento</label>
                <input type="text" class="form-control" documento="documento" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha</label>
                <input type="date" class="form-control" fecha="fecha" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" correo="correo" aria-describedby="emailHelp">

            </div>

            <button type="submit" class="btn btn-primary" name="btnregistrar" calue="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">]Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("select * from tb_persona");
                    while($datos=$sql->fetch_object()){ ?>
                    <tr>
                        <td> <?= $datos->id ?></td>
                        <td> <?= $datos->nombre ?></td>
                        <td> <?= $datos->apellido ?></td>
                        <td> <?= $datos->documento ?></td>
                        <td> <?= $datos->fecha_nac ?></td>
                        <td> <?= $datos->correo ?></td>
                        <td>
                            <a href="modificar_persona.php?id=<?=$datos->id?>" class= "btn btn-small btn-warning" ><i class="fa-solid fa-pen-to-square" ></i></a>
                            <a onclick="return eliminar ()"href="index.php?id=<?= $datos->id ?>" class= "btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                    
                </tbody>
            </table>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>