<!-- Daniel-AvN -->
<?php

$password="";
$user="root";
$dbname="yokotoons";

try{

    $conexion= new PDO("mysql:host=localhost;dbname=$dbname;",$user,$password);

    // $sql= "SELECT * FROM empleados";

    // $sentencia=$conexion->prepare($sql);
    // $sentencia->execute();
    // $res= $sentencia->fetchAll();

    // echo '<pre>';
    // print_r($res); //array asociativo
    // echo '</pre>';

}catch(PDOException $e){
    die("Error: " . $e->getMessage());
}
?>

<!--
 proyecto final:

https://proyecto-final-ldan-5pram.000webhostapp.com/

contra:

clubaMAtecbtis65!

$password="clubaMAtecbtis65!";
$user="id21570080_daniel";
$dbname="id21570080_proyecto";

-->