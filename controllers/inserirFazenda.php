<?php
    include_once("../models/Fazenda.php");
    include_once("../views/inserirFazenda.php");

    function setNew($data){
      $Fazenda = new Fazenda();
      $Fazenda->insertNew($data['Nome'], $data['Municipio'], $data['Extensao'], $data['Coordenadas']);
      header('Location: Fazenda.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
      setNew($_POST);
    }
?>
