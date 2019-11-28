<?php
    include_once("../models/Producao.php");
    include_once("../views/producao-view.php");

    function getAll(){
      $Producao = new Producao();
      return $Producao->showAll();
    }

    function deleteById($id){
      $Producao = new Producao();
      $Producao->deleteById($id);
      header("Location: Producao.php");
    }

    function table(){
      $result = getAll();
      echo "  <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Quantidade</th>
                    <th scope=\"col\">Safra</th>
                    <th scope=\"col\">Produtor</th>
                    <th scope=\"col\">Fazenda</th>
                    <th scope=\"col\">Produto</th>
                    <th scope=\"col\">Estoque</th>
                    <th scope=\"col\">Opções</th>
                  </tr>
                </thead>
                <tbody>";
      foreach($result as $dados){
        echo     "<tr>
                    <td>$dados[Quantidade]</td>
                    <td>$dados[Safra]</td>
                    <td>$dados[idProdutor]</td>
                    <td>$dados[idFazenda]</td>
                    <td>$dados[idProduto]</td>
                    <td>$dados[idEstoque]</td>
                    <td>
                      <a href=\"editarProducao.php?id=$dados[idProducao]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"Producao.php?function=delete&id=$dados[idProducao]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
              </table>
              <a href=\"./inserirProducao.php\"><button type=\"button\" class=\"btn btn-success\">Incluir</button></a>";
    }

    if(isset($_GET['function']) and isset($_GET['id'])) {
      deleteById($_GET['id']);
    }
?>
