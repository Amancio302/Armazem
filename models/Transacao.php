<?php
  include_once("Database_Connect.php");

  class Transacao extends Database_Connect{

    private $table = "Transacao";

    public function insertNew($valor, $quantidade, $estoque, $comprador, $transportadora){
      $connection = $this->connect();
      $data = "($valor, $quantidade, $estoque, $comprador, $transportadora)";
      $sql = "INSERT INTO $this->table (Valor, Quantidade, idEstoque, idComprador, idTransportadora) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
      $this->sumQuantidade($quantidade*-1);
    }

    public function deleteById($id){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($id, $cnpj, $nome, $telefone){
      $connection = $this->connect();
      $data = "Valor = $valor, Quantidade = $quantidade, idEstoque = $estoque, idComprador = $comprador, idTransportadora = $transportadora";
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
      $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
      mysqli_close($connection);
      return $result;
    }
  }
?>
