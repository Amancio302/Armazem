<?php
  include_once("Database_Connect.php");

  class Comprador extends Database_Connect{

    private $table = "Comprador";

    public function insertNew($cnpj, $nome, $telefone, $cep, $bairro, $rua, $numero, $complemento){
      $connection = $this->connect();
      $data = "($cnpj, \"$nome\", \"$telefone\", \"$cep\", \"$bairro\", \"$rua\", \"$numero\", \"$complemento\")";
      $sql = "INSERT INTO $this->table (CNPJ, Nome, Telefone, CEP, Bairro, Rua, Numero, Complemento) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function deleteById($id){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($id, $cnpj, $nome, $telefone, $cep, $bairro, $rua, $numero, $complemento){
      $connection = $this->connect();
      $data = "CNPJ = \"$cnpj\", Nome = \"$nome\", Telefone =  \"$telefone\", Cep = \"$cep\", Bairro = \"$bairro\", Rua = \"$rua\", Numero = \"$numero\", Complemento = \"$complemento\"";
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
