
<?php
    session_start();
    if(isset($_SESSION['usuario']) != true)
        header("Location:login.php");
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
    <link rel="stylesheet"  href="style/index.css"/>
</head>
<body>
<div class="container">
  <nav class="navbar navbar-expand-sm">
  <div class="col-5 p-2 rounded container ">
        <a class="nav-link disabled " href="index.php" style="color:gray">Página inicial</a>
        <a class="nav-link native" href="lista.php" style="color:#ff6dbd">Lista</a>
      <?php if(isset($_SESSION['usuario'])){?>
        <a class="nav-link" href="cadastro.php" style="color:#ff6dbd">Cadastro</a>
        <?php }else{?>
          <a class="nav-link disabled" href="cadastro.php">Cadastro</a>
         <?php }?>
  <?php if(isset($_SESSION['usuario'])){?>
    <form action="logout.php" class="d-flex">
    <input class="botao" type="submit" value="logout" class="btn btn-outline-info" />
    </form>
  <?php }else{?>
    <form action = "login.php" class="d-flex">
    <input class="botao" type="submit" value="Administrador" class="btn btn-outline-info" />
    </form>
  <?php }?>
  </div>
</nav>
<div class="col-8 row mt-4">
      <div class="col-sm">
          </div> 
           <div class="box2 col-sm border p-4 rounded" >
            <h3><center text="purple">Olá :) </center></h3>
            <font color="blue" face="Verdana" size="4px">
            <p align="center">Tradicionalmente é comum pedir indicações de  filmes para os amigos, 
              mas como lembrar de todos eles ? Aqui você pode anotar seus preferidos!!!</p>
            </font>
            <form action="cadastro.php" class="d-flex">
            <input class="botao" type="submit" value="Cadastro" class="btn btn-outline-info" />
           </form>
        </div> 
    </div>
</div>
</body>
</html>