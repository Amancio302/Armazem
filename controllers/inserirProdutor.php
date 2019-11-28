<?php
    include_once("../models/Produtor.php");
    include_once("../views/inserirProdutor.php");

    function setNew($data){
      $Produtor = new Produtor();
      $Produtor->insertNew($data['CNPJ'], $data['Nome'], $data['Telefone']);
      header('Location: Produtor.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
