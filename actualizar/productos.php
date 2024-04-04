<html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>
<?php

include '../conexion/conexion.php';
include '../sweetalert/sweetalert.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];  
$descripcion = $_POST['descripcion']; 
$precio = $_POST['precio'];
$materiales = $_POST['materiales'];

$n_imagen = $_FILES['imagen_material']['name'];
$material_archivo = $_FILES['imagen_material']['tmp_name'];
$ruta_imagen = '../Fotos/' . $n_imagen;
$base_material = 'Fotos/' . $n_imagen;

if (!empty($n_imagen)) {
    move_uploaded_file($material_archivo, $ruta_imagen);
    $imagen_material_actualizada = ", imagen_materiales='$base_material'";
} else {
    $imagen_material_actualizada = "";
}

$n_archivo = $_FILES['imagen_tubo']['name'];
$archivo = $_FILES['imagen_tubo']['tmp_name'];

$ruta = "../Fotos/" . $n_archivo;
$base_datos = "Fotos/" . $n_archivo;

if (!empty($n_archivo)) {
    move_uploaded_file($archivo, $ruta);
    $imagen_actualizada = ", imagen_tubo='$base_datos'";
} else {
    $imagen_actualizada = "";
}

$upd = "UPDATE productos SET nombre = '$nombre', cantidad = '$cantidad'$imagen_actualizada$imagen_material_actualizada, descripcion = '$descripcion', precio = '$precio', materiales = '$materiales' WHERE idproductos = '$id'";
$consulta = mysqli_query($conexion, $upd);

if (!$consulta) {
    echo "<script>alert('No se actualizo');</script>";
} else {
    echo $actualizar_productos;
}

?>