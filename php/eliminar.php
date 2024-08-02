<!-- Daniel-AvN -->
<?php

include 'conexion.php';

if (!$_POST) {
    header('location:../index.php');
}

$sqlFoto = "SELECT photo FROM empleados WHERE id = :id;";
$sentenciaFoto = $conexion->prepare($sqlFoto);
$sentenciaFoto->execute(['id' => $_POST['borrar']]);
$e = $sentenciaFoto->fetchAll();
$photo = $e[0]['photo'];

// la borra si existe
if (!empty($photo)) {
    $rutaFoto = "../imagenes/" . $photo;
    if (file_exists($rutaFoto)) {
        unlink($rutaFoto);
    }
}

$sqlEliminar = "DELETE FROM empleados WHERE id = :id;";
$sentenciaEliminar = $conexion->prepare($sqlEliminar);
$sentenciaEliminar->execute(['id' => $_POST['borrar']]);

header('location:../index.php');
?>