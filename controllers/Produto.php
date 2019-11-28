<?php
    include_once("../models/Produto.php");
    include_once("../views/produto-view.php");

    function getAll(){
      $Produto = new Produto();
      return $Produto->showAll();
    }

    function getById($id){
      $Produto = new Produto();
      return $Produto->showById($id);
    }

    function setNew($cnpj, $nome, $telefone){
      $Produto = new Produto();
      $Produto->insertNew($cnpj, $nome, $telefone);
    }

    function updateById($id, $cnpj, $nome, $telefone){
      $Produto = new Produto();
      $Produto->updateById($id , $cnpj, $nome, $telefone);
    }

    function deleteById($id){
      $Produto = new Produto();
      $Produto->deleteById($id);
    }

    function table(){
      $result = getAll();
      echo "<form name=\"formProdutor\" method=\"POST\" action=\"setNew\">
              <table class=\"table\">
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
                      <a href=\"Produto.php/updateById?search=$dados[idProduto]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"deleteById/$dados[idProduto]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
                  <tr><td colspan=\"3\" align=\"center\"><input type=\"submit\" value=\"Incluir Novo Contato\"></td>
                </tr>
              </table>
            </form>";
    }
?>
