<?php
class Cliente {

    private function dao(){
        require_once 'Dao.php';
        $dao = new Dao();
        return $dao;
    }

    public function traerClientes($id=null){
        $conn = $this->dao();
        $base="base2";
        return $conn->retornarDatos($base,$id);
    }

    public function eliminarCliente($id){
        $base="base2";
        $con = $this->dao();
        return $con->eliminarDatos($base,$id);
    }

    public function crearCliente($name, $phone , $address){
        $conn = $this->dao();
        $base="base2";
        return $conn->crear($base,$name,$phone,$address);
    }
   
    public function editarCliente($id, $name, $phone , $address){
        $con = $this ->dao ();
        $base="base2";
        return $con ->editar($id,$name,$phone,$address,$base);
    }
 


}