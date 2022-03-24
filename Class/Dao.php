<?php
    class Dao {
        public function retornarDatos($table, $id=null){
            require_once 'Conexion.php';
            $conexion=new Conexion();
            $cid = $conexion->conectar();
            $sql = "select * from $table";

            if($id){
                $sql .= " where id = $id";
            }
            
            $result = $cid->query($sql);
            $res = [];
            while($row=$result->fetch_assoc()){
                $res[] = $row;
            }
            return $res;
        }

        public function eliminarDatos($table, $name_id, $id){
            require_once 'Conexion.php';
                $conexion=new Conexion();
                $cid = $conexion->conectar();
                $sql = $cid->query("DELETE * FROM $table WHERE $name_id = $id");
                $stmt = $mysqli->prepare($sql);
                $stmt->execute();
            return true;    
        }

}

    
    
    
       
            






