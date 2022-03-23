
   
  <?php  
  session_start();
  if (!isset($_SESSION['usuario'])) {
      header("location:login.php");
  }

  include "conexion.php";

  $con=conectar();

  $sql="SELECT *  FROM clients";
  $query=mysqli_query($con,$sql);
     ?>
      <!DOCTYPE html>
<html>
    <head>
        <title> pagina clientes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/pag1.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        

    <div class="container">
    
    
    <div class="row">
        <div class="col"></div>
        <div class="col"><h3>Lista de clientes</h3></div>
        <div class="col"></div>
        </div>
        <table id="tabla_locales" class="table table-hover table-bordered" style="width:100%">
       
        <thead>
                    <tr>
                        <th style="width: 10%">client_id</th>
                        <th style="width: 15%">nombre</th>
                        <th style="width: 15%">telefono</th>
                        <th style="width: 10%">direccion</th>                        
                                
                    </tr>
                </thead>
        <tbody>
       <?php
                                          while($filas=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?= $filas['client_id']?></th>
                                                <th><?= $filas['client_name']?></th>
                                                <th><?= $filas['phone']?></th>
                                                <th><?= $filas['addres']?></th>    
                                                <th><a class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar.php?id=<?= $filas['client_id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>

                 <tr>
                  

                </tr>
                </tbody>