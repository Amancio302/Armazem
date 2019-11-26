<?php
  include("../config/database.php");

  class Fazenda{

    private $table = "Fazenda";

    private function connect(){
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

    public function insertNew($nome, $municipio, $extensao, $coordenadas){
      $connection = $this->connect();
      $data = "(\"$nome\", \"$municipio\", $extensao, \"$coordenadas\")";
      $sql = "INSERT INTO $this->table (Nome, Municipio, Extensao, Coordenadas) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function deleteById($id){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($id, $nome, $municipio, $extensao, $coordenadas){
      $connection = $this->connect();
      $data = "Nome = \"$nome\", Municipio = \"$municipio\", Extensao = \"$extensao\", Coordenadas =  \"$coordenadas\"";
      $sql = "UPDATE $this->table SET $data WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function selectById($id){
      $connection = $this->connect();
      $sql = "SELECT * FROM $this->table WHERE id$this->table = $id";
      $result = mysqli_fetch_all(mysqli_query($connection, $sql), MYSQLI_ASSOC);
      mysqli_close($connection);
      return $result;
    }

    public function showAll(){
      $connection = $this->connect();
      $sql = "SELECT * FROM $this->table";
      $query = mysqli_query($connection, $sql);
      if($query == false)
        return false;
      $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
      mysqli_close($connection);
      return $result;
    }
  }
?>
