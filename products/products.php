<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="../products/products.css" />
  <link rel="stylesheet" href="../footer/footer.css" />
  <link rel="shortcut icon" href="../Fotos/logo.png" type="image/x-icon">
  <title>Nuestros Tubos</title>
</head>

<body>
  <?php
  include '../navbar/navbar.html';
  include '../conexion/conexion.php';

  $resultados_x_pagina = 12;
  $pagina = isset($_GET['page']) ? $_GET['page'] : 1;
  $offset = ($pagina - 1) * $resultados_x_pagina;

  // Obtener el término de búsqueda
  $search = isset($_POST['search']) ? $_POST['search'] : '';

  if (!empty($search)) {
    $query = "SELECT * FROM productos WHERE nombre LIKE '%$search%' LIMIT $offset, $resultados_x_pagina";
    $total_query = "SELECT COUNT(*) as total FROM productos WHERE nombre LIKE '%$search%'";
  } else {
    $query = "SELECT * FROM productos LIMIT $offset, $resultados_x_pagina";
    $total_query = "SELECT COUNT(*) as total FROM productos";
  }

  $consulta = mysqli_query($conexion, $query);
  $total_resultados = mysqli_fetch_assoc(mysqli_query($conexion, $total_query))['total'];
  $total_paginas = ceil($total_resultados / $resultados_x_pagina);

  if (mysqli_num_rows($consulta) > 0) {
  ?>
    <div class="container">
      <div class="container-card">
        <?php while ($fila = mysqli_fetch_array($consulta)) { ?>
          <div class="card">
            <h1><?php echo $fila[1]; ?></h1>
            <a href="../visualizar/productos.php?imagen=<?php echo $fila[0]; ?>"><img src="../<?php echo $fila[3]; ?>" alt="" /></a>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php } else { ?>
    <div class='container'>
      <div class='alert alert-warning' style="display: block; margin: 75px auto;" role='alert'>No se encontraron productos.</div>
    </div>
  <?php } ?>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <?php for ($i = 1; $i <= $total_paginas; $i++) : ?>
        <li class="page-item <?php if ($i == $pagina) echo 'active'; ?>"><a class="page-link" href="?page=<?php echo $i . '&search=' . $search; ?>"><?php echo $i; ?></a></li>
      <?php endfor; ?>
    </ul>
  </nav>
  <?php include '../footer/footer.html';
  ?>
  <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>