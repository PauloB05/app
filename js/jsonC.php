<?php  
require_once '../Controller/ClientesController.php';
$arrayClientes = traerClientes();

echo json_encode($arrayClientes)



?>