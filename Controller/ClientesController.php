<?php

function traerClientes($id=null){
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    return $cliente->traerClientes($id);
    
}


function eliminarCliente($id){
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    return $cliente->eliminarCliente($id);
}

function crearCliente(){
  
    $name=$_POST['nombre'];
    $phone=$_POST['telefono'];
    $address=$_POST['direccion'];
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    
    return $cliente->crearCliente($name, $phone , $address);
    
}

function editarCliente($id){
    $name=$_POST['nombre'];
    $phone=$_POST['telefono'];
    $address=$_POST['direccion'];
    require_once '../Class/Cliente.php';
    $cliente = new cliente();
    
    return $cliente->editarCliente($id,$name, $phone , $address);



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
if(isset($_GET['editar_cliente'])){

    editarCliente($_GET['editar_cliente']);
    
     
}



 else {
    //traerClientes();

}







