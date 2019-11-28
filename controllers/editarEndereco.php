<?php
    include_once("../models/Endereco.php");
    include_once("../views/editarEndereco.php");

    function updateById($data){
      $Endereco = new Endereco();
      $Endereco->updateById($data['id'], $data['CEP'], $data['Bairro'], $data['Rua'], $data['Numero'], $data['Complemento']);
    }

    function getById($id){
      $Endereco = new Endereco();
      return $Endereco->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Endereco = getById($_GET['id']);
        $Endereco = $Endereco[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Endereco[idEndereco]\">
                  <label for=\"inputNome\">CEP</label>
                  <input type=\"text\" class=\"form-control\" name=\"CEP\" value=\"$Endereco[CEP]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Bairro</label>
                  <input type=\"text\" class=\"form-control\" name=\"Bairro\" value=\"$Endereco[Bairro]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Rua</label>
                  <input type=\"text\" class=\"form-control\" name=\"Rua\" value=\"$Endereco[Rua]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Numero</label>
                  <input type=\"text\" class=\"form-control\" name=\"Numero\" value=\"$Endereco[Numero]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Complemento</label>
                  <input type=\"text\" class=\"form-control\" name=\"Complemento\" value=\"$Endereco[Complemento]\">
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
      header('Location: Endereco.php');
    }
?>
