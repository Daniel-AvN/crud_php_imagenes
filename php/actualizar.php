<!-- Daniel-AvN -->

<link rel="stylesheet" href="../style.css">
<?php

include_once '../includes/header.php';
include_once 'conexion.php';


if(isset($_POST['actualizar']) ){
    $id_nuevo=$_POST['actualizar'];
    $sql= "SELECT * FROM empleados WHERE id=:id_nuevo";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute( ['id_nuevo'=>$id_nuevo] );
    $e= $sentencia->fetchAll();//regresa las filas de la consulta
    $e=$e[0];//quiero la primer fila, (es la unica)
    // print_r($e);
    // echo $e['name'];

?>
<main>
    <form method="post" action="update.php" class="agregar ml40" enctype="multipart/form-data">
        <h1 class="title">editar empleado </h1>
            <label for="nombre"> nombre: <br>
            <input type="text" required  name="nombre" value="<?php echo $e['name']; ?>">
        </label>
        <label for="email"> email: <br>
            <input type="email" required  name="email" value="<?php echo $e['email']; ?>">
        </label>
        <label for="cell"> cell: <br>
            <input type="number" min="0" required  name="cell" value="<?php echo $e['cell']; ?>">
        </label>
        <label for="photo"> photo:* <br>
            <input type="file"   name="photo"  value="<?php //echo $e['photo']; ?>" >
        </label>
        <input type="hidden" name="id_actualiza"  value="<?php echo $id_nuevo;?>"  >
        <button class="btn">enviar</button>
        <br><span>*Nota: si no se envia foto se asume que se quiere conservar la anterior</span>
</form>
</main>

<?php 

}else{
    header('location:../index.php');
}

include_once '../includes/footer.php';
?>

