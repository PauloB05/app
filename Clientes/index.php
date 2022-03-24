<?php  
session_start();
if (!isset($_SESSION['usuario'])) {
    header("location:../login.php");
}

require_once '../Controller/ClientesController.php';

$arrayClientes = traerClientes();
  
//   var_dump($arrayClientes);
//   die();

?>

<!DOCTYPE html>
<html>
<head>
    <title> Pagina clientes</title>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/pag1.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container">


    <div class="row">
        <div class="col"></div>
        <div class="col"><h3>Lista de clientes</h3></div>
        <div class="col"></div>
    </div>

    <table id="tabla_clientes" class="table table-hover table-bordered">
    <thead>
        <tr>
            <th >client_id</th>
            <th >nombre</th>
            <th >telefono</th>
            <th >direccion</th>     
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($arrayClientes as $filas){
        ?>
            <tr>
                <td><?= $filas['client_id']?></td>
                <td><?= $filas['client_name']?></td>
                <td><?= $filas['phone']?></td>
                <td><?= $filas['addres']?></td>    
                <td><a class="btn btn-info">Editar</a></td>
                <td><a href="../Controller/ClientesController.php?eliminar_id=<?=$filas['client_id']?>" class="btn btn-danger">Eliminar</a></td>                                        
            </tr>
        <?php 
        }
        ?>
    </tbody>
    </table>
</div>


</body>