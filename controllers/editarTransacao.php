<?php
    include_once("../models/Transacao.php");
    include_once("../views/editarTransacao.php");

    function updateById($data){
      $Transacao = new Transacao();
      $Transacao->updateById($data['id'], $data['Valor'], $data['Quantidade'], $data['Estoque'], $data['Comprador'], $data['Transportadora']);
    }

    function getById($id){
      $Transacao = new Transacao();
      return $Transacao->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Transacao = getById($_GET['id']);
        $Transacao = $Transacao[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Transacao[idTransacao]\">
                  <label for=\"inputNome\">Valor</label>
                  <input type=\"text\" class=\"form-control\" name=\"Valor\" value=\"$Transacao[Valor]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Quantidade</label>
                  <input type=\"text\" class=\"form-control\" name=\"Quantidade\" value=\"$Transacao[Quantidade]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Estoque</label>
                  <input type=\"text\" class=\"form-control\" name=\"Estoque\" value=\"$Transacao[Estoque]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Comprador</label>
                  <input type=\"text\" class=\"form-control\" name=\"Comprador\" value=\"$Transacao[Comprador]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Transportadora</label>
                  <input type=\"text\" class=\"form-control\" name=\"Transportadora\" value=\"$Transacao[Transportadora]\">
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
      header('Location: Transacao.php');
    }
?>
