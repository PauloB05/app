<?php
class Orden {

    private function dao(){
        require_once 'Dao.php';
        $dao = new Dao();
        return $dao;
    }

    public function traerOrdenes($id=null,$base){
        $conn = $this->dao();
        return $conn->retornarDatos($base, $id);
    }

    public function eliminarOrdenes($base,$id){
        $table = "orders";
        $con = $this->dao();
        return $con->eliminarDatos($base,$id);
    }

    public function crearOrden ($base,$name, $model , $condition){
        $conn = $this->dao();
        return $conn->crear($base,$name,$model,$condition);
    }

    public function editarOrden($id, $name, $model , $condition,$base){
        $con = $this ->dao ();
        return $con ->editar($id, $name, $model , $condition,$base);
    }
    
}
