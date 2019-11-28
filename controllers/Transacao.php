<?php
    include_once("../models/Transacao.php");
    include_once("../views/transacao-view.php");

    function getAll(){
      $Transacao = new Transacao();
      return $Transacao->showAll();
    }

    function deleteById($id){
      $Transacao = new Transacao();
      $Transacao->deleteById($id);
      header("Location: Transacao.php");
    }

    function table(){
      $result = getAll();
      echo "  <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Valor</th>
                    <th scope=\"col\">Data</th>
                    <th scope=\"col\">Quantidade</th>
                    <th scope=\"col\">Estoque</th>
                    <th scope=\"col\">Comprador</th>
                    <th scope=\"col\">Transportadora</th>
                    <th scope=\"col\">Opções</th>
                  </tr>
                </thead>
                <tbody>";
      foreach($result as $dados){
        echo     "<tr>
                    <td>$dados[Valor]</td>
                    <td>$dados[Data]</td>
                    <td>$dados[Quantidade]</td>
                    <td>$dados[idEstoque]</td>
                    <td>$dados[idComprador]</td>
                    <td>$dados[idTransportadora]</td>
                    <td>
                      <a href=\"editarTransacao.php?id=$dados[idTransacao]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"Transacao.php?function=delete&id=$dados[idTransacao]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
              </table>
              <a href=\"./inserirTransacao.php\"><button type=\"button\" class=\"btn btn-success\">Incluir</button></a>";
    }

    if(isset($_GET['function']) and isset($_GET['id'])) {
      deleteById($_GET['id']);
    }
?>
