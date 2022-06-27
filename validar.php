<?php
session_start();
if(isset($_REQUEST['txtNome'])== false){
    if(isset($_SESSION['usuario'])){
        exit();
    }
        header("Location: login.php");
    }
if($_REQUEST['txtNome'] == "admin" && $_REQUEST['txtSenha'] == "nimda")
{
$_SESSION['usuario'] = "Administrador";
header("Location: index.php");
}
else{
    echo "Usuário e senha inválidos";
}