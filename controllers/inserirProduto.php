<?php
    include_once("../models/Produto.php");
    include_once("../views/inserirProduto.php");

    function setNew($data){
      $Produto = new Produto();
      $Produto->insertNew($data['nome'], $data['tipo'], $data['especificacao']);
      header('Location: Produto.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
