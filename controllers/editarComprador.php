<?php
    include_once("../models/Comprador.php");
    include_once("../views/editarComprador.php");

    function updateById($data){
      $Comprador = new Comprador();
      $Comprador->updateById($data['id'], $data['CNPJ'], $data['Nome'], $data['Telefone'], $data['CEP'], $data['Bairro'], $data['Rua'], $data['Numero'], $data['Complemento']);
    }

    function getById($id){
      $Comprador = new Comprador();
      return $Comprador->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Comprador = getById($_GET['id']);
        $Comprador = $Comprador[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Comprador[idComprador]\">
                  <label for=\"inputNome\">Nome</label>
                  <input type=\"text\" class=\"form-control\" name=\"Nome\" value=\"$Comprador[Nome]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">CNPJ</label>
                  <input type=\"text\" class=\"form-control\" name=\"CNPJ\" value=\"$Comprador[CNPJ]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Telefone</label>
                  <input type=\"text\" class=\"form-control\" name=\"Telefone\" value=\"$Comprador[Telefone]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">CEP</label>
                  <input type=\"text\" class=\"form-control\" name=\"CEP\" value=\"$Comprador[CEP]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Bairro</label>
                  <input type=\"text\" class=\"form-control\" name=\"Bairro\" value=\"$Comprador[Bairro]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Rua</label>
                  <input type=\"text\" class=\"form-control\" name=\"Rua\" value=\"$Comprador[Rua]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Numero</label>
                  <input type=\"text\" class=\"form-control\" name=\"Numero\" value=\"$Comprador[Numero]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Complemento</label>
                  <input type=\"text\" class=\"form-control\" name=\"Complemento\" value=\"$Comprador[Complemento]\">
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
      header('Location: Comprador.php');
    }
?>
