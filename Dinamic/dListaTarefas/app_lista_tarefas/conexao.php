<?php

  class Conexao{

    private $host = 'localhost';
    private $dbname = 'php_com_pdo'; //nome da base de dados
    private $user = 'root'; //usuario
    private $pass = ''; //senha

    public function conectar(){
      try{
        $conexao = new PDO(
            "mysql:host=$this->host;dbname=$this->dbname",
            "$this->user",
            "$this->pass"
        );
        return $conexao;
      }catch(PDOException $e){
        echo '<p>'.$e->getMessage().'</p>';
      }
    }
  }
?>
