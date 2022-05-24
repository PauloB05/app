<?php
require "../vendor/autoload.php";
class Conexion{
    public function conectar(){
      $mongo = new \MongoDB\Client("mongodb://127.0.0.1:27017");
      $collection = $mongo;
      return $collection;

    }
}


