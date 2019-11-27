<?php
    include_once("../models/Produtor.php");
    include_once("../views/produtor-view.php");

    function getAll(){
      $produtor = new Produtor();
      $produtor->insertNew(11111111111111, "Jailsno", "998888997");
      return $produtor->showAll();
    }

    function getById(){

    }

    function setNew(){

    }

    function updateById(){

    }

    function deleteById(){

    }

    function table(){
      $result = getAll();
      echo "<form name=\"formProdutor\" method=\"POST\" action=\"setNew\"><table border=\"0\" align=\"center\" width=\"60%\">";
      echo "<tr bgcolor=\"grey\"><td width=\"50%\">Nome</td><td width=\"20%\">Telefone</td><td width=\"30%\"></td></tr>";
      foreach($result as $dados){
        echo "<tr><td>".$dados['Nome']."</td>";
        echo "<td>".$dados['Telefone']."</td></tr>";
      }
      echo "</tr><tr bgcolor=\"grey\"><td colspan=\"3\" height=\"5\"></td></tr><tr><td colspan=\"3\" align=\"center\"><input type=\"submit\" value=\"Incluir Novo Contato\"></td></tr></table></form>";
    }
?>
