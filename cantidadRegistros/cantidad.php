<?php

session_start();

if (empty($_SESSION['idusuarios'])) {
    echo "<script>alert('Tienes que iniciar sesion en el login');window.location.href = '../login/login.html'</script>";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Fotos/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="cantidad.css">
    <link rel="stylesheet" href="../sidebar/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Cantidad De Registros</title>
</head>

<body>
    <?php include '../sidebar/sidebar1.php';
    include '../conexion/conexion.php'; ?>
    <section class="contenedor">
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Productos</span>
                <a href="../admin/mostrar-productos.php"><img src="../Fotos/icono_tubo.jpg" alt="" class="img-item"></a>
                <span class="titulo-item"><?php $sql = "SELECT COUNT(*) total FROM productos";
                                            $resultado = mysqli_query($conexion, $sql);
                                            $fila = mysqli_fetch_assoc($resultado);
                                            echo "Total es: " . $fila['total']; ?>
                </span>
            </div>
            <div class="item">
                <span class="titulo-item">Usuarios</span>
                <a href="../admin/mostrar-usuarios.php"><img src="../Fotos/icono_usuarios.png" alt="" class="img-item"></a>
                <span class="titulo-item"><?php $sql = "SELECT COUNT(*) total FROM usuarios";
                                            $resultado = mysqli_query($conexion, $sql);
                                            $fila = mysqli_fetch_assoc($resultado);
                                            echo "Total es: " . $fila['total']; ?>
                </span>
            </div>
        </div>
    </section>
    <?php include '../sidebar/sidebar2.php'; ?>
    <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>
</body>

</html>