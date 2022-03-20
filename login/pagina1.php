<?php
$usuario=$_POST['name'];
$contraseña=$_POST['pass'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","base1");

$verificar="SELECT*FROM users where username='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$verificar);

$ingreso=mysqli_num_rows($resultado);

if($ingreso){
  
    header("location:pagina2.php");

}else{
 
  header("location:login.html");


}

mysqli_close($conexion);
