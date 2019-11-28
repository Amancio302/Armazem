<?php
    include_once("../models/Estoque.php");
    include_once("../views/inserirEstoque.php");

    function setNew($data){
      $Estoque = new Estoque();
      $Estoque->insertNew($data['Quantidade'], $data['Produto']);
      header('Location: Estoque.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
