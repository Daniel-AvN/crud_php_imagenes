<!-- Daniel-AvN -->
<link rel="stylesheet" href="../../style.css">

<?php

include '../conexion.php';
include '../../includes/header.php';

echo '<main>';

echo '<div class="con_c" ';
echo '<div class="c_hijo" ';


if($_POST){

    $username= $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM usuarios WHERE username =:username;';

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute( ['username'=>$username] );
    $r= $sentencia->fetchAll();
    
    // print_r($r);

     if( sizeof($r)==0 ){//mismo q count() ,si nadie tiene el mismo username
        echo '<p class=" panel__login-form has-validation-callback" > usuario NO registrado <br>
            <a  href="../../login.php">ir a registrarse</a>
             </p>';
    }
    else{
        $user=$r[0];
        if ($user['password']!=$password) {
            echo '<p class="" > contraseña incorrecta <br>
                <a  href="../../login.php">volver a intentarlo</a>
                  </p>';
        }else{
            session_start();
                $_SESSION['user']=$username;
                header('location:../../index.php');  
        
        }
    }

    // if( sizeof($r)!=0 ){//mismo q count() ,si nadie tiene el mismo username

    //     session_start();
    //     $_SESSION['user']=$username;
    //     header('location:../../index.php');  

    // }else{
    //     echo '<p class="center" > usuario NO registrado <br>
    //     <a  href="../../login.php">ir a registrarse</a>
    //          </p>';
    // }
}
echo '</div>';
echo '</div>';

echo '</main>';

include '../../includes/footer.php';

?>
