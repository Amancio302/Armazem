<?php
    include_once("../models/Produtor.php");
    include_once("../views/editarProdutor.php");

    function updateById($data){
      $Produtor = new Produtor();
      $Produtor->updateById($data['id'], $data['CNPJ'], $data['Nome'], $data['Telefone']);
    }

    function getById($id){
      $Produtor = new Produtor();
      return $Produtor->selectById($id);
    }

    function form(){
      if(isset($_GET['id'])){
        $Produtor = getById($_GET['id']);
        $Produtor = $Produtor[0];
        echo "<form method=\"POST\">
              <row>
                <div class=\"form-group col-md-6 pt-2\">
                  <input type=\"hidden\" name=\"id\" value=\"$Produtor[idProdutor]\">
                  <label for=\"inputNome\">Nome</label>
                  <input type=\"text\" class=\"form-control\" name=\"Nome\" value=\"$Produtor[Nome]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">CNPJ</label>
                  <input type=\"text\" class=\"form-control\" name=\"CNPJ\" value=\"$Produtor[CNPJ]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Telefone</label>
                  <input type=\"text\" class=\"form-control\" name=\"Telefone\" value=\"$Produtor[Telefone]\">
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
      header('Location: Produtor.php');
    }
?>
