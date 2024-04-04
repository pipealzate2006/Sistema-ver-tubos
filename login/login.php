<html>
<link rel="shortcut icon" href="../Fotos/logo.png" type="image/x-icon" />
<Title>Inicio Sesión</Title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../sweetalert/sweetalert.php';
include '../conexion/conexion.php';

session_start();

if (isset($_POST['Enviar'])) {
    if (!empty($_POST['correo']) && !empty($_POST['clave'])) {
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];

        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE correo = ? AND contraseña = ?");
        $stmt->bind_param("ss", $correo, $md5);

        $md5 = md5($clave);

        $stmt->execute();

        $result = $stmt->get_result();

        if ($datos = $result->fetch_object()) {
            $_SESSION['idusuarios'] = $datos->idusuarios;
            header("location: ../cantidadRegistros/cantidad.php");
        } else {
            echo $acceso_denegado;
        }

        $stmt->close();
    } else {
        echo "<script>alert('Los campos están vacíos, debes llenarlos'); window.location.href = '../login/login.html';</script>";
    }
}
