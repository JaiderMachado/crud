<?php
if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["documento"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"])) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $documento = $_POST["documento"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql = $conexion->query("insert into tb_persona(nombre,apellido,documento,fecha_nac,correo)values('$nombre','$apellido','$documento','$fecha','$correo')");
        if ($sql == 1){
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
    }else {
        echo'<div class="alert alert-warning">Uno o más campos están vacíos</div>';
    }
}

?>
