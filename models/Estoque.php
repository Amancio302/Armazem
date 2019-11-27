<?php
  include_once("Database_Connect.php");

  class Estoque extends Database_Connect{

    private $table = "Estoque";

    public function insertNew($quantidade, $produto){
      $connection = $this->connect();
      $data = "($quantidade, $produto)";
      $sql = "INSERT INTO $this->table (Quantidade, idProduto) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function deleteById($id){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($id, $quantidade, $produto){
      $connection = $this->connect();
      $data = "Quantidade = $quantidade, idProduto = $produto";
      $sql = "UPDATE $this->table SET $data WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function sumQuantidade($id, $sum){
      $connection = $this->connect();
      $sql = "SELECT Quantidade FROM $this->table WHERE id$this->table = $id";
      $result = mysqli_fetch_all(mysqli_query($connection, $sql));
      $quantidade =  $result[0][0];
      $quantidade = $quantidade + $sum;
      $data = "Quantidade = $quantidade";
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
