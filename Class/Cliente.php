<?php 

class Cliente {

    private function dao(){
        require_once 'Dao.php';
        $dao = new Dao();
        return $dao;
    }
    
    
    public function traerClientes(){

        $table = "clientes";
        $conn = $this->dao();
        return $conn->retornarDatos($table);
        
    }
    
}
