<?php

class Dao{
    
    public function retornarDatos($table){
        require_once 'Conexion.php';
        $conexion=new Conexion();
        $cid = $conexion->conectar();
        $result = $cid->query("select * from $table");
        $res = [];
        while($row=$result->fetch_assoc()){
            $res[] = $row;
        }
        return $res;
    }
}