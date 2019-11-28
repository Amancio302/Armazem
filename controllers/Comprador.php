<?php
    include_once("../models/Comprador.php");
    include_once("../views/comprador-view.php");

    function getAll(){
      $Comprador = new Comprador();
      return $Comprador->showAll();
    }

    function deleteById($id){
      $Comprador = new Comprador();
      $Comprador->deleteById($id);
      header("Location: Comprador.php");
    }

    function table(){
      $result = getAll();
      echo "  <table class=\"table\">
                <thead>
                  <tr>
                    <th scope=\"col\">Nome</th>
                    <th scope=\"col\">CNPJ</th>
                    <th scope=\"col\">Telefone</th>
                    <th scope=\"col\">CEP</th>
                    <th scope=\"col\">Bairro</th>
                    <th scope=\"col\">Rua</th>
                    <th scope=\"col\">Numero</th>
                    <th scope=\"col\">Complemento</th>
                    <th scope=\"col\">Opções</th>
                  </tr>
                </thead>
                <tbody>";
      foreach($result as $dados){
        echo     "<tr>
                    <td>$dados[Nome]</td>
                    <td>$dados[CNPJ]</td>
                    <td>$dados[Telefone]</td>
                    <td>$dados[CEP]</td>
                    <td>$dados[Bairro]</td>
                    <td>$dados[Rua]</td>
                    <td>$dados[Numero]</td>
                    <td>$dados[Complemento]</td>
                    <td>
                      <a href=\"editarComprador.php?id=$dados[idComprador]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"Comprador.php?function=delete&id=$dados[idComprador]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
              </table>
              <a href=\"./inserirComprador.php\"><button type=\"button\" class=\"btn btn-success\">Incluir</button></a>";
    }

    if(isset($_GET['function']) and isset($_GET['id'])) {
      deleteById($_GET['id']);
    }
?>
