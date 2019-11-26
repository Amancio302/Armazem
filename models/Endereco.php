<?php
  include("../config/database.php");

  class Endereco{

    private $table = "Endereco";

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

    public function insertNew($cep, $bairro, $rua, $numero, $complemento){
      $connection = $this->connect();
      $data = "(\"$cep\", \"$bairro\", \"$rua\", \"$numero\", \"$complemento\", )";
      $sql = "INSERT INTO $this->table (CNPJ, Nome, Telefone) VALUES $data";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function deleteById($id){
      $connection = $this->connect();
      $sql = "DELETE FROM $this->table WHERE id$this->table = $id";
      mysqli_query($connection, $sql);
      mysqli_close($connection);
    }

    public function updateById($id, $cep, $bairro, $rua, $numero, $complemento){
      $connection = $this->connect();
      $data = "CEP = \"$cep\", Bairro = \"$bairro\", Rua =  \"$rua\", Numero =  \"$numero\", Complemento =  \"$complemento\"";
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
