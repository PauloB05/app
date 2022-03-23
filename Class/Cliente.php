<?php 

class Cliente {

    private function retornarDatos($sql){
        require_once 'Conexion.php';
        $conexion=new Conexion();
        $cid = $conexion->conectar();
        $result = $cid->query($sql);
        $res = ($result->fetch_all()) ? $result->fetch_all() : [];
        return $res;
    }

    public function traerClientes(){
        $sql = "select * from clientes";
        return $this->retornarDatos($sql);
    }
    
}
