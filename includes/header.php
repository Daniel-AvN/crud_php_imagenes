<!-- Daniel-AvN -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empleados</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Kdam+Thmor+Pro&family=Nova+Slim&family=Open+Sans:wght@300&family=Roboto:wght@300&family=Signika+Negative:wght@600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a188062b10.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <p> <a href="/proyecto_final"> <i class="fa-solid fa-house" style="color: #000000;"></i> </a> </p>
        <h1 class="title">CRUD EMPLEADOS</h1>
        <form action="" method="post" class="fcerrar">
            <input type="hidden" name="cerrar" id="">
            <button class="btn btnR">cerrar sesión</button>
        </form>

    </header>

<?php 
if(isset($_POST['cerrar']) ){
    
    session_start();
    session_unset();
    session_destroy();
    // header('location:http://localhost/PHPLDAN/estudio/crudEmpleados/php/login/cerrar.php');
    // header('Location: ../login.php');
}
?>

