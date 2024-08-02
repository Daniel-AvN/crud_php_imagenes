<!-- Daniel-AvN -->
<?php

include 'conexion.php';

if(!$_POST){
    header('location:../index.php');
}

$name = $_POST['nombre'];
$email= $_POST['email'];
$cell = $_POST['cell'];

$photo = $_FILES['photo'];
  $nombreArchivo = $photo['name'] . '-'. date('s-y-m-d') .".jpg";
  $rutaArchivoTemporal = $photo['tmp_name']; // Ruta del archivo temporal en el servidor
  $destino = "../imagenes/" . $nombreArchivo;
  move_uploaded_file($rutaArchivoTemporal, $destino);

  $photo = $nombreArchivo;

$sql= "INSERT INTO empleados (name,email,cell,photo) VALUES (:name, :email, :cell, :photo)";

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute( ['name'=>$name,'email'=>$email,'cell'=>$cell,'photo'=>$photo ] );

header('location:../index.php');

?>