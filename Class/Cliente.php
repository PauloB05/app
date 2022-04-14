<?php
class Cliente {

private function dao(){
    require_once 'Dao.php';
    $dao = new Dao();
    return $dao;
}



public function traerClientes($id=null){
    $table = "clients";
    $conn = $this->dao();
    return $conn->retornarDatos($table, $id);

}

 public function eliminarCliente($id){
    $table = "clients";
    $con = $this->dao();
    return $con->eliminarDatos($table, $id);
 }

 public function crearCliente($name, $phone, $addres){
     $conn = $this->dao();
     return $conn->crearClientes($name, $phone, $addres);
 }
   

}