<?php
    include_once("../models/Endereco.php");
    include_once("../views/inserirEndereco.php");

    function setNew($data){
      $Endereco = new Endereco();
      $Endereco->insertNew($data['CEP'], $data['Bairro'], $data['Rua'], $data['Numero'], $data['Complemento']);
      header('Location: Endereco.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
