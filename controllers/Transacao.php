<?php
    include_once("../models/Transacao.php");
    include_once("../views/transacao-view.php");

    function getAll(){
      $Transacao = new Transacao();
      return $Transacao->showAll();
    }

    function getById($id){
      $Transacao = new Transacao();
      return $Transacao->showById($id);
    }

    function setNew($cnpj, $nome, $telefone){
      $Transacao = new Transacao();
      $Transacao->insertNew($cnpj, $nome, $telefone);
    }

    function updateById($id, $cnpj, $nome, $telefone){
      $Transacao = new Transacao();
      $Transacao->updateById($id , $cnpj, $nome, $telefone);
    }

    function deleteById($id){
      $Transacao = new Transacao();
      $Transacao->deleteById($id);
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
