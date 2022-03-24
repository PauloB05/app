<?php


function traerClientes(){
    require_once '../Class/Cliente.php';
    $cliente = new cliente();

    return $cliente->traerClientes();
}
function eliminarCliente(){
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    return $cliente->eliminarCliente();
}
