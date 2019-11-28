<?php
    include_once("../models/Producao.php");
    include_once("../views/inserirProducao.php");

    function setNew($data){
      $Producao = new Producao();
      $Producao->insertNew($data['Quantidade'], $data['Safra'], $data['Produtor'], , $data['Fazenda'], $data['Produto'], $data['Estoque']);
      header('Location: Producao.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
