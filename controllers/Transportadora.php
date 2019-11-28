<?php
    include_once("../models/Transportadora.php");
    include_once("../views/transportadora-view.php");

    function getAll(){
      $Transportadora = new Transportadora();
      return $Transportadora->showAll();
    }

    function deleteById($id){
      $Transportadora = new Transportadora();
      $Transportadora->deleteById($id);
      header("Location: Transportadora.php");
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
                      <a href=\"editarTransportadora.php?id=$dados[idTransportadora]\"><button type=\"button\" class=\"btn btn-primary\">Editar</button></a>
                      <a href=\"Transportadora.php?function=delete&id=$dados[idTransportadora]\"><button type=\"button\" class=\"btn btn-danger\">Excluir</button<\a>
                    </td>
                  </tr>";
      }
      echo     "</tbody>
              </table>
              <a href=\"./inserirTransportadora.php\"><button type=\"button\" class=\"btn btn-success\">Incluir</button></a>";
    }

    if(isset($_GET['function']) and isset($_GET['id'])) {
      deleteById($_GET['id']);
    }
?>
