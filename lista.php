<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="confirmar.js"></script>
    <link rel="stylesheet"  href="style/pags2.css"/>
    <link rel="stylesheet" href="style/responsive.css">
</head>
<body>
<nav class="navbar navbar-expand-sm">
  <div class="col-5 p-2 rounded container ">
        <a class="nav-link" style="color:#ff6dbd" href="index.php">Página inicial</a>
        <a class="nav-link disabled" href="lista.php" style="color:gray">Lista</a>
        <a class="nav-link" style="color:#ff6dbd" href="cadastro.php">Cadastro</a>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h4>Lista de Filmes</h4>
            <?php require("select2.php") ?>
        </div>
    </div>
</div>
</body>
</html>