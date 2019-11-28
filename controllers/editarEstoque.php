<?php
    include_once("../models/Estoque.php");
    include_once("../views/editarEstoque.php");

    function updateById($data){
      $Estoque = new Estoque();
      $Estoque->updateById($data['id'], $data['Quantidade'], $data['Produto']);
    }

    function getById($id){
      $Estoque = new Estoque();
      return $Estoque->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Estoque = getById($_GET['id']);
        $Estoque = $Estoque[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Estoque[idEstoque]\">
                  <label for=\"inputNome\">Quantidade</label>
                  <input type=\"text\" class=\"form-control\" name=\"Quantidade\" value=\"$Estoque[Quantidade]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Produto</label>
                  <input type=\"text\" class=\"form-control\" name=\"Produto\" value=\"$Estoque[Produto]\">
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
      header('Location: Estoque.php');
    }
?>
