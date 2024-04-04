<html>
<link rel="shortcut icon" href="../Fotos/logo.png" type="image/x-icon" />
<Title>Cerrando Sesión</Title>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../sweetalert/sweetalert.php';

session_start();
session_destroy();
echo $cerrarSesion;
?>