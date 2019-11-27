<?php
    include_once("../models/Comprador.php");
    include_once("../views/comprador-view.php");

    function getAll(){
      $comprador = new Comprador();
      return $comprador->showAll();
    }

    function getById($id){
      $comprador = new Comprador();
      return $comprador->showById($id);
    }

    function setNew($cnpj, $nome, $telefone){
      $comprador = new Comprador();
      $comprador->insertNew($cnpj, $nome, $telefone);
    }

    function updateById($id, $cnpj, $nome, $telefone){
      $comprador = new Comprador();
      $comprador->updateById($id , $cnpj, $nome, $telefone);
    }

    function deleteById($id){
      $comprador = new Comprador();
      $comprador->deleteById($id);
    }

    function table(){
      $result = getAll();
      echo "<form name=\"formComprador\" method=\"POST\" action=\"setNew\">
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
