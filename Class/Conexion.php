
<?php

class Conexion{
    private $servidor = 'localhost';
    private $database = 'base1';
    private $user = 'root';
    private $pass = '';
    private $character = 'UTF-8';

    public function conectar(){
        try {
            $conn = new mysqli($this->servidor, $this->user, $this->pass, $this->database);

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            return $conn;
             
         } catch (PDOException $e){
            echo $e->getMessage();
         }
    }
}