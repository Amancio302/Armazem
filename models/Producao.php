<?php
  include_once("Database_Connect.php");

  class Producao extends Database_Connect{

    private $table = "Producao";

    public function insertNew($quantidade, $safra, $produtor, $fazenda, $produto, $estoque){
      $connection = $this->connect();
      $data = "($quantidade, $safra, $produtor, $fazenda, $produto, $estoque)";
      $sql = "INSERT INTO $this->table (Quantidade, Safra, idProdutor, idFazenda, idProduto, idEstoque) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function deleteById($id){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($id, $quantidade, $safra, $produtor, $fazenda, $produto, $estoque){
      $connection = $this->connect();
      $data = "Quantidade = $quantidade, Safra = \"$safra\", idProdutor = $produtor, idFazenda = $fazenda, idProduto = $produto, idEstoque = $estoque";
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
