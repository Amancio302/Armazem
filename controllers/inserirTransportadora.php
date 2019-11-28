<?php
    include_once("../models/Transportadora.php");
    include_once("../views/inserirTransportadora.php");

    function setNew($data){
      $Transportadora = new Transportadora();
      $Transportadora->insertNew($data['CNPJ'], $data['Nome'], $data['Telefone'], $data['CEP'], $data['Bairro'], $data['Rua'], $data['Numero'], $data['Complemento']);
      header('Location: Transportadora.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
