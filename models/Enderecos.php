<?php
  include_once("Database_Connect.php");

  class Enderecos extends Database_Connect{

    private $table = "Enderecos";

    public function insertNew($produtor, $endereco){
      $connection = $this->connect();
      $data = "($produtor, $endereco)";
      $sql = "INSERT INTO $this->table (idProdutor, idEndereco) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function deleteById($produtor, $endereco){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE idProdutor = $produtor AND idEndereco = $endereco";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($produtor, $endereco){
      $connection = $this->connect();
      $data = "idProdutor = $produtor, idEndereco = $endereco";
      $sql = "UPDATE $this->table SET $data WHERE idProdutor = $produtor AND idEndereco = $endereco";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function selectById($produtor, $endereco){
      $connection = $this->connect();
      $sql = "SELECT * FROM $this->table WHERE idProdutor = $produtor AND idEndereco = $endereco";
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
