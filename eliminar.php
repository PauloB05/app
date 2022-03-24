<?php

include "conexion.php";
$con=conectar();
$cod_c=$_GET['id'];
require_once '../Controller/ClientesController.php';
eliminarCliente("$cod_c");

?>

