<?php
  include("../models/Fazenda.php");
  include("../models/Produtor.php");
  include("../models/Endereco.php");
  include("../models/Producao.php");
  include("../models/Produto.php");
  include("../models/Estoque.php");
  include("../models/Transacao.php");
  include("../models/Comprador.php");
  include("../models/Transportadora.php");
  $produtor = new Produtor();
  $produtor->deleteById(1);
  echo "Deu <br />";
?>
