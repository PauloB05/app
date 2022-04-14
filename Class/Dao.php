<?php
    class Dao {
        public function retornarDatos($table, $id=null){
            require_once 'Conexion.php';
            $conexion=new Conexion();
            $cid = $conexion->conectar();
            $sql = "select * from $table";

            if($id){
                $sql = " where id = $id";
            }
        
            $result = $cid->query($sql);
            $res = [];
            while($row=$result->fetch_assoc()){
                $res[] = $row;
            }
            return $res;
        }

        public function eliminarDatos($table, $id){
            require_once 'Conexion.php';
                $conexion = new Conexion();
                $cid = $conexion->conectar();
                $sql = $cid->query("DELETE * FROM $table WHERE id = $id");
                var_dump($sql);
                $stmt = $mysqli->prepare($sql);  
                $stmt ->execute();
               return true ; 
               
             
        }

        public function crearClientes($name, $phone, $addres){
            require_once 'Conexion.php';
            $conexion = new Conexion();
            $cid = $conexion->conectar();
            $sql = $cid-> query("INSERT INTO clients (client_name, phone, addres) 
        values ($name, $phone, $addres"); 
            $stmt = $cid-> prepare($sql);     
            $stmt->execute();
            return true ;
        }

}

    
    
    
       