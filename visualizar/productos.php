<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="productos.css">
    <link rel="stylesheet" href="../footer/footer.css">
    <link rel="shortcut icon" href="../Fotos/logo.png" type="image/x-icon">
    <title>Nuestros Tubos</title>
</head>

<body>
    <?php
    include '../navbar/navbar.html';
    include '../conexion/conexion.php';

    if (isset($_GET['imagen'])) {
        $imagen = $_GET['imagen'];
        $stmt = $conexion->prepare("SELECT * FROM productos WHERE idproductos = ?");
        $stmt->bind_param('s', $imagen);
        $stmt->execute();
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) { ?>
                <div class="product">
                    <div class="product-img">
                        <img src="../<?php echo $fila['imagen_tubo']; ?>" alt="">
                    </div>
                    <div class="product__information">
                        <h1 class="product__information-name">
                            <?php echo $fila['nombre']; ?>
                        </h1>
                        <p class="product__information-price">
                            <?php echo "$" . $fila['precio']; ?>
                        </p>
                        <p class="product__information-amount">
                            <b>Cantidad:</b> <?php echo $fila['cantidad']; ?>
                        </p>
                        <p class="product__information-materials">
                            <b>Materiales:</b>
                            <?php echo $fila['materiales']; ?>
                        </p>
                        <div class="materials-img">
                            <img src="../<?php echo $fila['imagen_materiales'] ?>" alt="">
                        </div>
                        <p class="product__information-description">
                            <b>Descripción:</b>
                            <?php echo $fila['descripcion']; ?>
                        </p>
                        <a href="#notaCompra" class="btn btn-success" data-bs-toggle="modal"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
                    </div>
                </div>
    <?php
                include 'notaCompra.html';
            }
        }
    } ?>
    <div class="container-card">
        <?php
        if (isset($_POST['search']) && !empty($_POST['search'])) {
            $search = $_POST['search'];
            $query = "SELECT * FROM productos WHERE nombre LIKE '%$search%'";
            $consulta = mysqli_query($conexion, $query);
            if ($consulta->num_rows > 0) {
                while ($row = $consulta->fetch_assoc()) { ?>
                    <div class="card">
                        <h1><?php echo $row['nombre']; ?></h1>
                        <a href="../visualizar/productos.php?imagen=<?php echo $row['idproductos']; ?>"><img src="../<?php echo $row['imagen_tubo']; ?>" alt="" /></a>
                    </div>
                <?php }
            } else {
                echo "No se encontraron productos.";
            }
        } else {
            $query = $conexion->prepare("SELECT * FROM productos WHERE idproductos <> ?");
            $query->bind_param('s', $imagen);
            $query->execute();
            $resultado = $query->get_result();
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) { ?>
                    <div class="card">
                        <h1><?php echo $row['nombre']; ?></h1>
                        <a href="../visualizar/productos.php?imagen=<?php echo $row['idproductos']; ?>"><img src="../<?php echo $row['imagen_tubo']; ?>" alt="" /></a>
                    </div>
        <?php }
            } else {
                echo "No se encontraron productos.";
            }
        } ?>
    </div>


    <?php include '../footer/footer.html'; ?>
    <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>