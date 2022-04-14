<?php


function traerClientes(){
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    return $cliente->traerClientes();
}

function eliminarCliente($id){
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    return $cliente->eliminarCliente($id);
}

function crearCliente(){
    $name=$_POST['nombre'];
    $phone=$_POST['telefono'];
    $addres=$_POST['direccion'];
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    return $cliente->crearCliente($name, $phone, $addres);
    
}
if(isset($_GET['crear_cliente'])){

    if(crearCliente()){
        header("location:../Clientes/index.php");
    }

}



if(isset($_GET['eliminar_id'])){

    if(eliminarCliente($_GET['eliminar_id'])){
        header("location:../Clientes/index.php");
    }

}