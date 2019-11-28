<?php
    include_once("../models/Fazenda.php");
    include_once("../views/editarFazenda.php");

    function updateById($data){
      $Fazenda = new Fazenda();
      $Fazenda->updateById($data['id'], $data['Nome'], $data['Municipio'], $data['Extensao'], $data['Coordenadas']);
    }

    function getById($id){
      $Fazenda = new Fazenda();
      return $Fazenda->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Fazenda = getById($_GET['id']);
        $Fazenda = $Fazenda[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Fazenda[idFazenda]\">
                  <label for=\"inputNome\">Nome</label>
                  <input type=\"text\" class=\"form-control\" name=\"Nome\" value=\"$Fazenda[Nome]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Municipio</label>
                  <input type=\"text\" class=\"form-control\" name=\"Municipio\" value=\"$Fazenda[Municipio]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Extensao</label>
                  <input type=\"text\" class=\"form-control\" name=\"Extensao\" value=\"$Fazenda[Extensao]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Coordenadas</label>
                  <input type=\"text\" class=\"form-control\" name=\"Coordenadas\" value=\"$Fazenda[Coordenadas]\">
                </div>
              <button type=\"submit\" class=\"btn btn-primary ml-3\">Alterar</button>
              </row>
            </form>";
        }
        else{
          echo "Não passou ID";
        }
    }

    if(isset($_GET['id'])) {
      updateById($_GET['id']);
    }

    if(isset($_POST['id'])) {
      updateById($_POST);
      $_POST = array();
      header('Location: Fazenda.php');
    }
?>
