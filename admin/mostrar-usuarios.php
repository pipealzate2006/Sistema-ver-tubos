<?php

session_start();

if (empty($_SESSION['idusuarios'])) {
    echo "<script>alert('Tienes que iniciar sesion en el login');window.location.href = '../login/login.html'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../data/datatables/datatables.min.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../sidebar/sidebar.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../Fotos/logo.png" type="image/x-icon">
    <title>Mostrar Usuarios</title>
    <style>
        #bton {
            margin-left: 150px;
            margin-top: 15px;
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="sidebar-open">
    <?php include '../sidebar/sidebar1.php'; ?>
    <button type="button" class="btn btn-success" id="bton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa-solid fa-square-plus"></i> Agregar Registro de usuarios</button>
    <div class="container">
        <table id="usuarios" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th>Accciones</th>
                </tr>
            </thead>
            <?php

            include '../conexion/conexion.php';
            $query = "SELECT * FROM usuarios";
            $consulta = mysqli_query($conexion, $query);

            if (mysqli_num_rows($consulta) >= 1) {
                while ($fila = mysqli_fetch_array($consulta)) { ?>
                    <tr>
                        <th><?php echo $fila['idusuarios']; ?></th>
                        <td><?php echo $fila[1]; ?></td>
                        <td><?php echo $fila[2]; ?></td>
                        <td><?php echo $fila[3]; ?></td>
                        <td style="text-align: center;">
                            <a href="#usuarios<?php echo $fila['idusuarios']; ?>" class="btn btn-success" data-bs-toggle="modal">
                                <i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#usuariosEliminar<?php echo $fila["idusuarios"]; ?>" class="btn btn-danger" data-bs-toggle="modal" style="margin-left: 10px;"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php include '../actualizar/modal-usuarios.php';
                    include '../eliminar/modal-usuarios.php'; ?>
                <?php
                }
                ?>
        </table>
    <?php
            } else {
                echo "No hay resultados para esa busqueda";
            }
    ?>
    </div>
    <?php include '../sidebar/sidebar2.php'; ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo registro para usuarios</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="../procesoRegistro/usuarios.php" class="row g-3" id="centrar">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="message-text" class="col-form-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control" id="recipient-name" placeholder="Ingrese el nombre del administrador">
                            </div>
                            <div class="col-md-6">
                                <label for="message-text" class="col-form-label">Apellido:</label>
                                <input type="text" name="apellido" class="form-control" id="recipient-name" placeholder="Ingrese el apellido">
                            </div>
                            <div class="col-md-6">
                                <label for="message-text" class="col-form-label">Correo:</label>
                                <input type="email" name="correo" class="form-control" id="recipient-name" placeholder="Ingrese el correo">
                            </div>
                            <div class="col-md-6">
                                <label for="message-text" class="col-form-label">Contraseña:</label>
                                <input type="password" name="contrasena" class="form-control" id="recipient-name" placeholder="Ingrese la contraseña">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" name="Cerrar" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" name="Enviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>
    <script src="../data/jquery/jquery-3.3.1.min.js"></script>
    <script src="../data/popper/popper.min.js"></script>
    <script type="text/javascript" src="../data/datatables/datatables.min.js"></script>
    <script src="../data/datatables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="../data/datatables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="../data/datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#usuarios').DataTable({
                language: {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados",
                    "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "sSearch": "Buscar:",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sProcessing": "Procesando...",
                },
                responsive: "true",
                dom: 'Bfrtilp',
                buttons: [{
                        extend: 'excelHtml5',
                        text: '<i class="fas fa-file-excel"></i> ',
                        titleAttr: 'Exportar a Excel',
                        className: 'btn btn-success'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="fas fa-file-pdf"></i> ',
                        titleAttr: 'Exportar a PDF',
                        className: 'btn btn-danger'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fa fa-print"></i> ',
                        titleAttr: 'Imprimir',
                        className: 'btn btn-info'
                    },
                ]
            });
        });
    </script>

</body>

</html>