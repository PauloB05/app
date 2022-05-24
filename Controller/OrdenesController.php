<?php

function traerOrdenes($id=null){
    require_once '../Class/Ordenes.php';
    $cliente = new Orden();
    $base="base1";
    return $cliente->traerOrdenes($id,$base);
    
}
function eliminarOrdenes($id){
    require_once '../Class/Ordenes.php';
    $cliente = new Orden();
    $base="base1";
    return $cliente->eliminarOrdenes($base,$id);
}


function crearOrden(){
    
    $name=$_POST['nombre'];
    $model=$_POST['modelo'];
    $condition=$_POST['condicion'];
    $base="base1";
    require_once '../Class/Ordenes.php';
    $cliente = new Orden();
    
    return $cliente->crearOrden($base,$name, $model , $condition);
    
}


function editarOrden($id){
    $name=$_POST['nombre'];
    $model=$_POST['modelo'];
    $condition=$_POST['condicion'];
    $base="base1";
    require_once '../Class/Ordenes.php';
    $cliente = new Orden();   
    return $cliente->editarOrden($id,$name, $model , $condition,$base);



}


if(isset($_GET['eliminar_id'])){

    if(eliminarOrdenes($_GET['eliminar_id'])){
        header("location:../Ordenes/index.php");
    }
}



if(isset($_GET['crear_orden'])){

    if(crearOrden()){
        header("location:../Ordenes/index.php");
    }
}

if(isset($_GET['editar_ordenes'])){

    editarOrden($_GET['editar_ordenes']);
    
     
}

