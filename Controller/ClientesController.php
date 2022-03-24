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

if(isset($_GET['eliminar_id'])){

    if(eliminarCliente($_GET['eliminar_id'])){
        header("location:../Clientes/index.php");
    }

}

// if(isset($_GET['traer_id'])){

//     if(traerClientePorId($_GET['traer_id'])){
        
//     }

// }