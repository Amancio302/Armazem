<?php
    include_once("../models/Producao.php");
    include_once("../views/producao-view.php");

    function getAll(){
      $Producao = new Producao();
      return $Producao->showAll();
    }

    function getById($id){
      $Producao = new Producao();
      return $Producao->showById($id);
    }

    function setNew($cnpj, $nome, $telefone){
      $Producao = new Producao();
      $Producao->insertNew($cnpj, $nome, $telefone);
    }

    function updateById($id, $cnpj, $nome, $telefone){
      $Producao = new Producao();
      $Producao->updateById($id , $cnpj, $nome, $telefone);
    }

    function deleteById($id){
      $Producao = new Producao();
      $Producao->deleteById($id);
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
