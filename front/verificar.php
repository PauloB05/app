<?php
include "Class/Conexion.php";
$usuario=$_POST["name"];
$contraseña=$_POST['pass'];
$cone = new Conexion();
$cid = $cone->conectar()->clients->users;
$sql = $cid->find(['_id' =>1]);
$sq = $sql->toArray();  

if($sq[0]->name == $usuario && $sq[0]->pass == $contraseña){

  session_start();
  $_SESSION['usuario']=$usuario;
  header("location:Clientes/index.php"); 

}else{  
  header("location:login.php"); 
}

// include "conexion.php";
// $verificar="SELECT*FROM users where username='$usuario' and pass='$contraseña'";
// $resultado=mysqli_query($conexion,$verificar);
// var_dump($resultado);
// die();

// $ingreso=mysqli_num_rows($resultado);
// if($ingreso){
//   session_start();
//   $_SESSION['usuario']=$usuario;
//   header("location:Clientes/index.php");

// }else{

?>



