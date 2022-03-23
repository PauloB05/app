<?php 

class Cliente {
    public function retornarClientes(){
        require_once 'Conexion.php';
        $conexion=new Conexion();
        $cid = $conexion->conectar();

        $sql = "select * from clients";
        $result = $cid->query($sql);
        var_dump($result->fetch_all());
        
          
    }
}

$cliente = new Cliente();

$cliente->retornarClientes();