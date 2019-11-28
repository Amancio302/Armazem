<?php
    include_once("../models/Produtor.php");
    include_once("../views/produtor-view.php");

    function getAll(){
      $produtor = new Produtor();
      return $produtor->showAll();
    }

    function deleteById($id){
      $produtor = new Produtor();
      $produtor->deleteById($id);
      header("Location: Produtor.php");
    }

    function table(){
      $result = getAll();
      echo "  <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Nome</th>
                    <th scope=\"col\">CNPJ</th>
                    <th scope=\"col\">Telefone</th>
                    <th scope=\"col\">Opções</th>
                  </tr>
                </thead>
                <tbody>";
      foreach($result as $dados){
        echo     "<tr>
                    <td>$dados[Nome]</td>
                    <td>$dados[CNPJ]</td>
                    <td>$dados[Telefone]</td>
                    <td>
                      <a href=\"editarProdutor.php?id=$dados[idProdutor]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"Produtor.php?function=delete&id=$dados[idProdutor]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
              </table>
              <a href=\"./inserirProdutor.php\"><button type=\"button\" class=\"btn btn-success\">Incluir</button></a>";
    }

    if(isset($_GET['function']) and isset($_GET['id'])) {
      deleteById($_GET['id']);
    }
?>
