<?php
    include_once("../models/Produto.php");
    include_once("../views/produto-view.php");

    function getAll(){
      $Produto = new Produto();
      return $Produto->showAll();
    }

    function deleteById($id){
      $Produto = new Produto();
      $Produto->deleteById($id);
      header("Location: Produto.php");
    }

    function table(){
      $result = getAll();
      echo "  <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Nome</th>
                    <th scope=\"col\">Tipo</th>
                    <th scope=\"col\">Especificação</th>
                    <th scope=\"col\">Opções</th>
                  </tr>
                </thead>
                <tbody>";
      foreach($result as $dados){
        echo     "<tr>
                    <td>$dados[Nome]</td>
                    <td>$dados[Tipo]</td>
                    <td>$dados[Especificacao]</td>
                    <td>
                      <a href=\"editarProduto.php?id=$dados[idProduto]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"Produto.php?function=delete&id=$dados[idProduto]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
              </table>
              <a href=\"./inserirProduto.php\"><button type=\"button\" class=\"btn btn-success\">Incluir</button></a>";
    }

    if(isset($_GET['function']) and isset($_GET['id'])) {
      deleteById($_GET['id']);
    }
?>
