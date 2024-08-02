<!-- Daniel-AvN -->
<?php

include_once '../includes/header.php';
include_once 'conexion.php';

if ($_POST) {
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $cell = $_POST['cell'];
    $id_nuevo = $_POST['id_actualiza'];

    // Verifica si se recibió el archivo de imagen
    if (!empty($_FILES['photo']['name'])) {
        // Obtiene la foto actual del empleado
        $sql = "SELECT photo FROM empleados WHERE id=:id_nuevo;";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute(['id_nuevo' => $id_nuevo]);
        $e = $sentencia->fetchAll();
        $photo_anterior = $e[0]['photo'];

        // Borra la imagen anterior si existe
        if (!empty($photo_anterior)) {
            $rutaFotoAnterior = "../imagenes/" . $photo_anterior;
            if (file_exists($rutaFotoAnterior)) {
                unlink($rutaFotoAnterior);
            }
        }

        // Procesa el nuevo archivo de imagen
        $photo = $_FILES['photo'];
        $nombreArchivo = $photo['name'] . '-' . date('s-y-m-d') . ".jpg";
        $rutaArchivoTemporal = $photo['tmp_name'];
        $destino = "../imagenes/" . $nombreArchivo;
        move_uploaded_file($rutaArchivoTemporal, $destino);
        $photo = $nombreArchivo;
    } else {
        // Si no se recibe el archivo, obtén la foto actual del empleado
        $sql = "SELECT photo FROM empleados WHERE id=:id_nuevo;";
        $sentencia = $conexion->prepare($sql);
        $sentencia->execute(['id_nuevo' => $id_nuevo]);
        $e = $sentencia->fetchAll();
        $photo = $e[0]['photo'];
    }

    $sql = "UPDATE empleados SET name = :name, email = :email, cell = :cell, photo = :photo WHERE empleados.id = :id";

    $sentencia = $conexion->prepare($sql);
    $sentencia->execute(['name' => $name, 'email' => $email, 'cell' => $cell, 'photo' => $photo, 'id' => $id_nuevo]);
}

header('location:../index.php');
?>
