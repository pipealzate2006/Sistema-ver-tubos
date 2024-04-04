<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php
include '../conexion/conexion.php';
include '../sweetalert/sweetalert.php';

if (isset($_POST['Enviar'])) {

    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];
    $materiales = $_POST['materiales'];
    $precio = $_POST['precio'];

    $n_imagen = $_FILES['imagen_material']['name'];
    $material_archivo = $_FILES['imagen_material']['tmp_name'];
    $ruta_imagen = '../Fotos/' . $n_imagen;
    $base_material = 'Fotos/' . $n_imagen;

    move_uploaded_file($material_archivo, $ruta_imagen);

    $n_archivo = $_FILES['imagen_tubo']['name'];
    $archivo = $_FILES['imagen_tubo']['tmp_name'];

    $ruta = "../Fotos/" . $n_archivo;
    $base_datos = "Fotos/" . $n_archivo;

    move_uploaded_file($archivo, $ruta);

    $query = $conexion->prepare("INSERT INTO productos (nombre, cantidad, imagen_tubo, imagen_materiales, descripcion, precio, materiales) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $query->bind_param('sssssds', $nombre, $cantidad, $base_datos, $base_material, $descripcion, $precio, $materiales);

    // Ejecutar la consulta
    if ($query->execute()) {
        echo $insertar_productos;
    } else {
        echo 'Error al insertar el registro: ' . $conexion->error;
    }

    $conexion->close();
}
?>