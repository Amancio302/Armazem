<?php
    include_once("../models/Transacao.php");
    include_once("../views/inserirTransacao.php");

    function setNew($data){
      $Transacao = new Transacao();
      $Transacao->insertNew($data['Valor'], $data['Data'], $data['Quantidade'], $data['Estoque'], $data['Comprador'], $data['Transportadora']);
      header('Location: Transacao.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
