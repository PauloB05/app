<?php
class Cliente {

private function dao(){
    require_once 'Dao.php';
    $dao = new Dao();
    return $dao;
}


public function traerClientes(){

    $table = "clients";
    $conn = $this->dao();
    return $conn->retornarDatos($table);
    
 }
 public function eliminarCliente(){
    $table = "clients";
    $con = $this->dao();
    return $con->eliminarDatos($id);
 }
   

         }



