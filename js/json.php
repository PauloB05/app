<?php  
require_once '../Controller/OrdenesController.php';
$arrayOrdenes = traerOrdenes();
// foreach($arrayOrdenes as $filas){
   
// $filas["id"]  = $filas["_id"];

// }
echo json_encode($arrayOrdenes)



?>