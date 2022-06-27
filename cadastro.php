<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PW - Página incial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"  href="style/box.css"/>
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet"  href="style/pags.css"/>
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-sm">
    <div class="col-5 p-2 rounded container ">
          <a class="nav-link" style="color:#ff6dbd" href="index.php">Página inicial</a>
          <a class="nav-link" style="color:#ff6dbd" href="lista.php">Lista de Filmes</a>
  <?php if(isset($_SESSION['usuario'])){?>
          <a class="nav-link disabled" href="cadastro.php" style="color:gray"> Cadastro</a>
  <?php } else { ?>
          <a class="nav-link disabled" href="cadastro.php">Cadastro</a>
  <?php } ?>
        </li>
      </ul>
  <?php if(isset($_SESSION['usuario'])){?>
      <form action="logout.php" class="d-flex">
        <input class="botao" type="submit" value="logout" class="btn btn-outline-info" />
      </form>
  <?php } else { ?>
      <form action="login.php" class="d-flex">
        <input class="botao" type="submit" value="Entrar" class="btn btn-outline-info" />
      </form>
  <?php } ?>
    </div>
  </nav>
    <div class="row">
      <div class="box  col-sd border  p-3 rounded row align-items-center ">
            <h1>Cadastro</h1>
            <form action="salvar.php" method="POST">
              <div class="mt-3">
                <label for="txtNome" class="form-label">Nome:</label>
                <input type="text" name="txtNome" id="txtNome" placeholder="Nome" class="form-control" required />
              </div>
              <div class="mt-3">
                <label for="txtAno" class="form-label">Ano:</label>
                <input type="ano" name="txtAno" id="txtAno" placeholder="Ano" class="form-control" required />
              </div>
              <div class="mt-3">
                <label for="txtCategoria" class="form-label">Categoria:</label>
                <input type="categoria" name="txtCategoria" id="txtCategoria" placeholder="Categoria" class="form-control" required />
              </div>
              <div class="mt-3">
                <label for="txtDiretor" class="form-label">Diretor:</label>
                <input type="diretor" name="txtDiretor" id="txtDiretor" placeholder="Diretor" class="form-control" required />
              </div>
              <div class="mt-3">
                <label for="txtDuração" class="form-label">Duração:</label>
                <input type="duracao" name="txtDuracao" id="txtDuração" placeholder="Duração" class="form-control" required />
              </div>
              <div  class="mt-4">
                        <input class="botao" type = "submit" value= "Salvar"/>
                    </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

