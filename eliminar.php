<?php

include "conexion.php";
$con=conectar();

$cod_c=$_GET['id'];

$sql="DELETE FROM clients WHERE client_id='$cod_c'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pagina2.php");
    }

?>
