<?php
    include_once("../models/Fazenda.php");
    include_once("../views/fazenda-view.php");

    function getAll(){
      $fazenda = new Fazenda();
      return $fazenda->showAll();
    }

    function getById($id){
      $fazenda = new Fazenda();
      return $fazenda->showById($id);
    }

    function setNew($cnpj, $nome, $telefone){
      $fazenda = new Fazenda();
      $fazenda->insertNew($cnpj, $nome, $telefone);
    }

    function updateById($id, $cnpj, $nome, $telefone){
      $fazenda = new Fazenda();
      $fazenda->updateById($id , $cnpj, $nome, $telefone);
    }

    function deleteById($id){
      $fazenda = new Fazenda();
      $fazenda->deleteById($id);
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
