<?php
    include_once("../models/Fazenda.php");
    include_once("../views/fazenda-view.php");

    function getAll(){
      $Fazenda = new Fazenda();
      return $Fazenda->showAll();
    }

    function deleteById($id){
      $Fazenda = new Fazenda();
      $Fazenda->deleteById($id);
      header("Location: Fazenda.php");
    }

    function table(){
      $result = getAll();
      echo "  <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Nome</th>
                    <th scope=\"col\">Municipio</th>
                    <th scope=\"col\">Extensao</th>
                    <th scope=\"col\">Coordenadas</th>
                    <th scope=\"col\">Opções</th>
                  </tr>
                </thead>
                <tbody>";
      foreach($result as $dados){
        echo     "<tr>
                    <td>$dados[Nome]</td>
                    <td>$dados[Municipio]</td>
                    <td>$dados[Extensao]</td>
                    <td>$dados[Coordenadas]</td>
                    <td>
                      <a href=\"editarFazenda.php?id=$dados[idFazenda]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"Fazenda.php?function=delete&id=$dados[idFazenda]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
              </table>
              <a href=\"./inserirFazenda.php\"><button type=\"button\" class=\"btn btn-success\">Incluir</button></a>";
    }

    if(isset($_GET['function']) and isset($_GET['id'])) {
      deleteById($_GET['id']);
    }
?>
