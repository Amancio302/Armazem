<?php
  include_once("Database_Connect.php");

  class Posse extends Database_Connect{

    private $table = "Posse";

    public function insertNew($produtor, $fazenda){
      $connection = $this->connect();
      $data = "($produtor, $fazenda)";
      $sql = "INSERT INTO $this->table (idProdutor, idFazenda) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function deleteById($produtor, $fazenda){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE idProdutor = $produtor AND idEndereco = $fazenda";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($produtor, $fazenda){
      $connection = $this->connect();
      $data = "idProdutor = $produtor, idFazenda = $fazenda";
      $sql = "UPDATE $this->table SET $data WHERE idProdutor = $produtor AND idEndereco = $fazenda";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function selectById($produtor, $fazenda){
      $connection = $this->connect();
      $sql = "SELECT * FROM $this->table WHERE idProdutor = $produtor AND idEndereco = $fazenda";
      $result = mysqli_fetch_all(mysqli_query($connection, $sql), MYSQLI_ASSOC);
      mysqli_close($connection);
      return $result;
    }

    public function showAll(){
      $connection = $this->connect();
      $sql = "SELECT * FROM $this->table";
      $query = mysqli_query($connection, $sql);
      $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
      mysqli_close($connection);
      return $result;
    }
  }
?>
