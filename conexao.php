<?php

  class Conexao{
    
    private $host = 'localhost';
    private $dbname = 'php_pdo';
    private $user = 'root';
    private $password = '';

    public function conectar(){

        try{
            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                "$this->user",
                "$this->password");
            return $conexao;


        }catch(PDOExeption $e){
            echo '<p>'.$e->getMessege().'</p>';
        }
    }
  }
?>