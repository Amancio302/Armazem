<?php
include("../config/database.php");
  $table = "Fazenda";

  function connect(){
    global $host, $login, $senha, $database;
    $connection = mysqli_connect($host, $login, $senha, $database);
    if(!$connection){
      echo "Houve uma falha ao conectar ao MySql";
      exit;
    }
    else{
      echo "Conexão bem-sucedida";
      return $connection;
    }
  }

  function newFazenda($nome, $municipio, $extensao, $coordenadas){
    global $table;
    $connection = connect();
    $data = "(\"$nome\", \"$municipio\", \"$extensao\", \"$coordenadas\")";
    $sql = "INSERT INTO $table (Nome, Municipio, Extensao, Coordenadas) VALUES $data";
    mysqli_query($connection, $sql);
  }

  function deleteFazenda($id){
    global $table;
    $connection = connect();
    $sql = "DELETE FROM $table WHERE idFazenda = $id";
    mysqli_query($connection, $sql);
  }

  function updateFazenda($id, $nome, $municipio, $extensao, $coordenadas){
    global $table;
    $connection = connect();
    $data = "Nome = \"$nome\", Municipio = \"$municipio\", Extensao = \"$extensao\", Coordenadas =  \"$coordenadas\"";
    $sql = "UPDATE $table SET $data WHERE idFazenda = $id";
    mysqli_query($connection, $sql);
    echo $sql;
  }
?>
