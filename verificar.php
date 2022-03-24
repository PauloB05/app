<?php
$usuario=$_POST['name'];
$contraseña=$_POST['pass'];
session_start();
$_SESSION['usuario']=$usuario;

include "conexionn.php";
$verificar="SELECT*FROM users where username='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$verificar);

$ingreso=mysqli_num_rows($resultado);

if($ingreso){
  
  header("location:Clientes/index.php");

}else{
 
  header("location:login.php");


}

mysqli_close($conexion);
