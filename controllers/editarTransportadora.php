<?php
    include_once("../models/Transportadora.php");
    include_once("../views/editarTransportadora.php");

    function updateById($data){
      $Transportadora = new Transportadora();
      $Transportadora->updateById($data['id'], $data['CNPJ'], $data['Nome'], $data['Telefone'], $data['CEP'], $data['Bairro'], $data['Rua'], $data['Numero'], $data['Complemento']);
    }

    function getById($id){
      $Transportadora = new Transportadora();
      return $Transportadora->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Transportadora = getById($_GET['id']);
        $Transportadora = $Transportadora[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Transportadora[idTransportadora]\">
                  <label for=\"inputNome\">Nome</label>
                  <input type=\"text\" class=\"form-control\" name=\"Nome\" value=\"$Transportadora[Nome]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">CNPJ</label>
                  <input type=\"text\" class=\"form-control\" name=\"CNPJ\" value=\"$Transportadora[CNPJ]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Telefone</label>
                  <input type=\"text\" class=\"form-control\" name=\"Telefone\" value=\"$Transportadora[Telefone]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">CEP</label>
                  <input type=\"text\" class=\"form-control\" name=\"CEP\" value=\"$Transportadora[CEP]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Bairro</label>
                  <input type=\"text\" class=\"form-control\" name=\"Bairro\" value=\"$Transportadora[Bairro]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Rua</label>
                  <input type=\"text\" class=\"form-control\" name=\"Rua\" value=\"$Transportadora[Rua]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Numero</label>
                  <input type=\"text\" class=\"form-control\" name=\"Numero\" value=\"$Transportadora[Numero]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Complemento</label>
                  <input type=\"text\" class=\"form-control\" name=\"Complemento\" value=\"$Transportadora[Complemento]\">
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
      header('Location: Transportadora.php');
    }
?>
