<?php
  include_once("../config/database.php");

  abstract class Database_Connect{
    protected function connect(){
      global $host, $login, $senha, $database;
      $connection = mysqli_connect($host, $login, $senha, $database);
      if(!$connection){
        echo "Houve uma falha ao conectar ao MySql <br />";
        exit;
      }
      else{
        echo "Conexão bem-sucedida <br />";
        return $connection;
      }
    }
  }
?>
