<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../sweetalert/sweetalert.php';

if (isset($_POST['Enviar'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $rol = 1;

    $md5 = md5($contrasena);

    $query = $conexion->prepare("INSERT INTO usuarios (nombre_administrador, apellido_administrador, correo, contraseña, rol) VALUES (?, ?, ?, ?, ?)");

    $query->bind_param('sssss', $nombre, $apellido, $correo, $md5, $rol);

    // Ejecutar la consulta
    if ($query->execute()) {
        echo $insertar_usuarios;
    } else {
        echo 'Error al insertar el registro: ' . $conexion->error;
    }

    $conexion->close();
}
?>