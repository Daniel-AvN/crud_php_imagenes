<!-- Daniel-AvN -->
<link rel="stylesheet" href="../../style.css">

<?php

include '../conexion.php';
include '../../includes/header.php';

echo '<main>';

echo '<div class="con_c cn2" ';
echo '<div class="c_hijo" ';

if($_POST){

    $name = $_POST['name'];
    $username= $_POST['r_username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM usuarios WHERE username =:username;';

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute( ['username'=>$username] );
    $r= $sentencia->fetchAll();
    
    if( sizeof($r)==0 ){//mismo q count() echo 'array vacio';
        $sql= "INSERT INTO usuarios (real_name,username,password) VALUES (:name, :username, :password)";
        $sentencia= $conexion->prepare($sql);
        $sentencia->execute( ['name'=>$name,'username'=>$username,'password'=>$password] );

        session_start();
        $_SESSION['user']=$username;

        echo '<p class="" > usuario registrado !<br>
                <a  href="../../index.php">ir a pagina principal</a>
            </p>';
    }else{
        echo '<p class="" > el nombre de usuario ya esta en uso, tienes que cambiarlo';
        echo '<br><a href="../../login.php">ir a cambiarlo</a></p>';
    }
}
echo '</div>';
echo '</div>';

echo '</main>';

// header('location:../../index.php');
include '../../includes/footer.php';

?>