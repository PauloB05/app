<?php  

require_once '../Controller/OrdenesController.php';
$arrayOrdenes = traerOrdenes();
?>

<!DOCTYPE html>
<html>
<head>
    <title> Pagina Ordenes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/pag1.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css"/>
    <script src="table.js"></script>
    <script src="../js/sweetalert.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style>
*{
    cursor: pointer;
}
</style>
</head>
<body>
<div class="container">

    <div class="row">
        <div class="col"></div>
        <div class="col"><h3>Lista de ordenes </h3></div>
        <div class="col"></div>
    </div>

    <div class="row">
        <div class="col"></div>
        <div class="col" ><a href="crear.php"class="btn btn-info">crear</a></div>
        <div class="col"></div>
    </div>

<table id="tabla_clientes" class="table table-hover table-bordered">
    <thead>
        <tr>
            <th >order_id</th>
            <th >nombre</th>
            <th >modelo</th>
            <th >condicion</th>     
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($arrayOrdenes as $filas){
        ?>
            <tr>
                <td><?= $filas['_id']?></td>
                <td><?= $filas['order_name']?></td>
                <td><?= $filas['model']?></td>
                <td><?= $filas['order_condition']?></td>    
                <td><a href="editar.php?id=<?=$filas['_id']?>"><i class="fa-solid fa-pen-to-square "></i></a></td>                                                     
                <td><i onclick="eliminar('<?= $filas['_id']?>')" class="fa-solid fa-trash-can" ></i></td>   
                                    
            </tr>
       <?php       
        }
        ?>
    </tbody>
    </table>
</div>
    <script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script  src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script  src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script  src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script  src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://kit.fontawesome.com/d83ef733e2.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
    $('#tabla_clientes').DataTable({
      "language": {
        
          "sProcessing":     "Procesando...",
          "sLengthMenu":     "Mostrar _MENU_ registros",
          "sZeroRecords":    "No se encontraron resultados",
          "sEmptyTable":     "Ningún dato disponible en esta tabla",
          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
          "sInfoPostFix":    "",
          "sSearch":         "Buscar:",
          "sUrl":            "",
          "sInfoThousands":  ",",
          "sLoadingRecords": "Cargando...",
          "oPaginate": {
              "sFirst":    "Primero",
              "sLast":     "Último",
              "sNext":     "Siguiente",
              "sPrevious": "Anterior"
          },
          "oAria": {
              "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
              "sSortDescending": ": Activar para ordenar la columna de manera descendente"
          },
          "buttons": {
              "copy": "Copiar",
              "colvis": "Visibilidad"
          }
      
      },
      select: true,
      dom: 'lBfrtip', 
      buttons: [   'copy', 'excel', 'pdf', 'print' ],
      "pageLength": 50,
      fixedHeader: true
    });
    });
    const eliminar =(id)=>{
        const url='../Controller/OrdenesController.php?eliminar_id='+id

        $.get(
            url,         
            function(response){   
            swal({
                title: "Terminado",
                text: "Orden Eliminada",
                icon: "success",
                button: "Aceptar",
            })
            .then((value) => {
                armarTabla()
            });
            }
        )
    }        
</script>
</body>