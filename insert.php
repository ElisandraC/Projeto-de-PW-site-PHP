<?php

    require("conecta.php");
    //require_once("conecta.php");
    //include("conecta.php");
    //include_once("conecta.php");  

    //Criar variável para INSERT
   /*  $nome = "A volta daquele que não foi";
     $ano = "2022";
     $cat= "comedia";
     $dir = "Emerson Rocha";
     $dura = "4:00"; */
    //Criar uma variavel de string e resulta em sql
    $sqlInsert = "INSERT INTO tb_FILME(NOME_F, ANO_F,CATEGORIA_F,DIRETOR_F,DURACAO_F) VALUES('$nome','$ano','$cat','$dir','$dura')";
    

    $resposta = mysqli_query($conexao,$sqlInsert);

    if($resposta){
        echo "Cadastro feito com sucesso";
        mysqli_close($conexao);
    }
    else{
        echo mysqli_connect_error();
    }
?>