<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../views/style.css">

  <title>GrãosDB</title>
</head>

<body>
  <!-- As a link -->
  <nav class="navbar navbar-light bg-light graos-nav">
    <a class="navbar-brand" href="./index.php">GrãosDB</a>
  </nav>

  <h1 class="text-center pt-1">Producao</h1>

  <form method="POST">
    <div class="form-group col-md-6 pt-2">
      <label for="inputQuantidade">Quantidade</label>
      <input type="text" class="form-control" name="Quantidade">
    </div>
    <div class="form-group col-md-6">
      <label for="inputSafra">Safra</label>
      <input type="text" class="form-control" name="Safra">
    </div>
    <div class="form-group col-md-6 pt-2">
      <label for="inputProdutor">Produtor</label>
      <input type="text" class="form-control" name="Produtor">
    </div>
    <div class="form-group col-md-6 pt-2">
      <label for="inputFazenda">Fazenda</label>
      <input type="text" class="form-control" name="Fazenda">
    </div>
    <div class="form-group col-md-6 pt-2">
      <label for="inputProduto">Produto</label>
      <input type="text" class="form-control" name="Produto">
    </div>
    <div class="form-group col-md-6 pt-2">
      <label for="inputEstoque">Estoque</label>
      <input type="text" class="form-control" name="Estoque">
    </div>
  <button type="submit" class="btn btn-success ml-3">Inserir</button>
</form>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
