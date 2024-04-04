<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php

include '../conexion/conexion.php';
include '../sweetalert/sweetalert.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

$upd = "UPDATE usuarios SET nombre_administrador = '$nombre', apellido_administrador = '$apellido', correo = '$correo' WHERE idusuarios = '$id'";
$consulta = mysqli_query($conexion, $upd);

if (!$consulta) {
    echo "<script>alert('No se actualizo');</script>";
} else {
    echo $actualizar_usuarios;
}

?>