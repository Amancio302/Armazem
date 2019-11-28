<?php
    include_once("../models/Producao.php");
    include_once("../views/editarProducao.php");

    function updateById($data){
      $Producao = new Producao();
      $Producao->updateById($data['id'], $data['Quantidade'], $data['Safra'], $data['Producao'], $data['Fazenda'], $data['Produto'], $data['Estoque']);
    }

    function getById($id){
      $Producao = new Producao();
      return $Producao->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Producao = getById($_GET['id']);
        $Producao = $Producao[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Producao[idProducao]\">
                  <label for=\"inputNome\">Quantidade</label>
                  <input type=\"text\" class=\"form-control\" name=\"Quantidade\" value=\"$Producao[Quantidade]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Safra</label>
                  <input type=\"text\" class=\"form-control\" name=\"Safra\" value=\"$Producao[Safra]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Producao</label>
                  <input type=\"text\" class=\"form-control\" name=\"Producao\" value=\"$Producao[Producao]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Fazenda</label>
                  <input type=\"text\" class=\"form-control\" name=\"Fazenda\" value=\"$Producao[Fazenda]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Produto</label>
                  <input type=\"text\" class=\"form-control\" name=\"Produto\" value=\"$Producao[Produto]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Estoque</label>
                  <input type=\"text\" class=\"form-control\" name=\"Estoque\" value=\"$Producao[Estoque]\">
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
      header('Location: Producao.php');
    }
?>
