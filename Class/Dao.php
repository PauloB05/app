<?php
    class Dao {
        public function retornarDatos($base, $id=null){
                require_once 'Conexion.php';
                $conexion=new Conexion();
                $cid = $conexion->conectar()->clients->$base;
                if($id){
                    $sql = $cid->find(['_id' =>new MongoDB\BSON\ObjectId($id)]);
                    $sq = $sql->toArray();
                    return $sq[0];

                } else{
                    $sql = $cid->find()->toArray();
                    $res=$sql;  
                    return $res;
                }
        }                 
   
        public function eliminarDatos($base,$id){
                require_once 'Conexion.php';
                $conexion = new Conexion();
                $cid = $conexion->conectar()->clients->$base;
                $sql = $cid->deleteOne(["_id"=>new MongoDB\BSON\ObjectId($id)]);
                return true;
        
        }

        public function crear($base,$name,$phone,$address){
            require_once 'Conexion.php';
            if($base == "base1"){
                $conexion = new Conexion();
                $cid = $conexion->conectar()->clients->$base;
                $sql = $cid-> insertOne(['order_name'=>$name,'model'=>$phone,'order_condition'=>$address]) ; 
                return true ;
            }else{
                $conexion = new Conexion();
                $cid = $conexion->conectar()->clients->$base;
                $sql = $cid-> insertOne(['client_name'=>$name,'phone'=>$phone,'addres'=>$address]) ; 
                return true ;
            }
        }

        public function editar($id, $name, $model , $condition ,$base){
            require_once 'Conexion.php';
            if($base == "base1"){
                $conexion = new Conexion();
                $cid = $conexion->conectar()->clients->$base;
                $sql = $cid -> updateOne(['_id' =>new MongoDB\BSON\ObjectId($id)],['$set' => ['order_name' => $name, 'model'=> $model, 'order_condition' => $condition]]);
                return true ;
            }else{
                $conexion = new Conexion();
                $cid = $conexion->conectar()->clients->$base;
                $sql = $cid -> updateOne(['_id' =>new MongoDB\BSON\ObjectId($id)],['$set' => ['client_name' => $name, 'phone'=> $model, 'addres' => $condition]]);
                return true ;
            }
        }
    
    }
    