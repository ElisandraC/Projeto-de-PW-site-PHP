<?php

    require("conecta.php");
    //require_once("conecta.php");
    //include("conecta.php");
    //include_once("conecta.php");  

    //Criar variável para INSERT
    extract($_POST);
  
    //Criar uma variavel de string e resulta em sql
    $sqlInsert = "INSERT INTO tb_FILME(NOME_F, ANO_F,CATEGORIA_F,DIRETOR_F,DURACAO_F) VALUES('$txtNome','$txtAno','$txtCategoria','$txtDiretor','$txtDuracao')";


    $resposta = mysqli_query($conexao,$sqlInsert);

    if($resposta){
        header("Location: lista.php");
        
    }
    else{
        echo mysqli_connect_error();
    }
?>