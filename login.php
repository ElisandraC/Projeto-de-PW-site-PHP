<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet"  href="style/main.css"/>
    <link rel="stylesheet" type="text/css" href="/style/icone/css/all.css">
    <link rel="stylesheet" href="style/responsive.css">
    <link rel="stylesheet"  href="style/box.css"/>
    <?php // só exemplo https://www.alura.com.br/artigos/como-utilizar-icones-em-paginas-web?>
</head>
<body>   
<form method="post" action="validar.php">
<div class="container ">
      <div class="row mt-5" >
           <div class="col-sm">
           </div> 
           <div class="box col-sm border  p-4 rounded" >
                <h1>login</h1>
                  <form action = "validar.php">
                     <div class="mt-4">
                      <label for="txtNome">Nome:</label>
                      <input type="text" name="txtNome" id="txtNome"Placeholder="Nome" class="form-control"/>
                     </div>
                     <div class="mt-4">
                       <label for="txtSenha">Senha:</label>
                       <input type="password" name="txtSenha" id="txtSenha"Placeholder="Senha" class="form-control"/>         
                      </div> 
                      <div class="mt-4">
                        <input  type = "submit" value= "login" class="botao"/>
                    </div>
                </form>
            </div>
            <div class="col-4">
           </div> 
      </div>
</form>
</body>
</html>