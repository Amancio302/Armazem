<?php
    include_once("../models/Produto.php");
    include_once("../views/editarProduto.php");

    function updateById($data){
      $Produto = new Produto();
      $Produto->updateById($data['id'], $data['nome'], $data['tipo'], $data['especificacao']);
    }

    function getById($id){
      $Produto = new Produto();
      return $Produto->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Produto = getById($_GET['id']);
        $Produto = $Produto[0];
        echo "<form method=\"POST\">
                <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Produto[idProduto]\">
                  <label for=\"inputNome\">Nome</label>
                  <input type=\"text\" class=\"form-control\" name=\"nome\" value=\"$Produto[Nome]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Tipo</label>
                  <input type=\"text\" class=\"form-control\" name=\"tipo\" value=\"$Produto[Tipo]\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"inputEspecificacao\">Descrição</label>
                    <textarea class=\"form-control\" name=\"especificacao\" rows=\"3\">$Produto[Especificacao]</textarea>
                  </div>
                </row>
              <button type=\"submit\" class=\"btn btn-primary ml-3\">Alterar</button>
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
      header('Location: Produto.php');
    }
?>
