<?php
require_once 'conexion.php';

$conexion=new Conexion();
$cid = $conexion->conectar();
$sql = "select * from usuarios";

if($id){
    $sql.= " where id = $id";
}

$result = $cid->query($sql);
$res = [];
while($row=$result->fetch_assoc()){
    $res[] = $row;
}
var_dump($res);

?>