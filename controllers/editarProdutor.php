<?php
    include_once("../models/Produtor.php");
    include_once("../views/editarProdutor.php");

    function updateById($data){
      $Produtor = new Produtor();
      $Produtor->updateById($data['id'], $data['nome'], $data['tipo'], $data['especificacao']);
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
                  <input type=\"text\" class=\"form-control\" name=\"nome\" value=\"$Produtor[Nome]\">
                </div>
                <div class=\"form-group col-md-6\">
                  <label for=\"inputTipo\">Tipo</label>
                  <input type=\"text\" class=\"form-control\" name=\"tipo\" value=\"$Produtor[Tipo]\">
                </div>
                <div class=\"form-group col-md-6\">
                    <label for=\"inputEspecificacao\">Descrição</label>
                    <textarea class=\"form-control\" name=\"especificacao\" rows=\"3\">$Produtor[Especificacao]</textarea>
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