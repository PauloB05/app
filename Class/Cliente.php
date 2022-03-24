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
    $name_id = "client_id";
    $con = $this->dao();
    return $con->eliminarDatos($table, $name_id, $id);
 }
   

}
