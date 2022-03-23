<?php


function traerClientes(){
    require_once '../Class/Cliente.php';
    $cliente = new Cliente();

    return $cliente->traerClientes();
}