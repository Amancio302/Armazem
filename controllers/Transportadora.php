<?php
    include_once("../models/Transportadora.php");
    include_once("../views/transportadora-view.php");

    function getAll(){
      $Transportadora = new Transportadora();
      return $Transportadora->showAll();
    }

    function getById($id){
      $Transportadora = new Transportadora();
      return $Transportadora->showById($id);
    }

    function setNew($cnpj, $nome, $telefone){
      $Transportadora = new Transportadora();
      $Transportadora->insertNew($cnpj, $nome, $telefone);
    }

    function updateById($id, $cnpj, $nome, $telefone){
      $Transportadora = new Transportadora();
      $Transportadora->updateById($id , $cnpj, $nome, $telefone);
    }

    function deleteById($id){
      $Transportadora = new Transportadora();
      $Transportadora->deleteById($id);
    }

    function table(){
      $result = getAll();
      echo "<form name=\"formProdutor\" method=\"POST\" action=\"setNew\">
              <table border=\"0\" align=\"center\" width=\"60%\">
                <tr bgcolor=\"grey\">
                  <td width=\"50%\">Nome</td>
                  <td width=\"20%\">Telefone</td>
                  <td width=\"30%\"></td>
                </tr>";
      foreach($result as $dados){
        echo   "<tr>
                  <td>".$dados['Nome']."</td>
                  <td>".$dados['Telefone']."</td>
                </tr>";
      }
      echo     "<tr bgcolor=\"grey\">
                  <td colspan=\"3\" height=\"5\"></td>
                </tr>
                <tr>
                  <td colspan=\"3\" align=\"center\"><input type=\"submit\" value=\"Incluir Novo Contato\"></td>
                </tr>
              </table>
            </form>";
    }
?>
