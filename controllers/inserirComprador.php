<?php
    include_once("../models/Comprador.php");
    include_once("../views/inserirComprador.php");

    function setNew($data){
      $Comprador = new Comprador();
      $Comprador->insertNew($data['CNPJ'], $data['Nome'], $data['Telefone'], $data['CEP'], $data['Bairro'], $data['Rua'], $data['Numero'], $data['Complemento']);
      header('Location: Comprador.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
