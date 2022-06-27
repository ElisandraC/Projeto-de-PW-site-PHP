<?php
require ("conecta.php");

if(!isset($_REQUEST['id'])){
    echo "Usuário não identificado";
    die();
}
$id = $_REQUEST['id'];

$sqlUpdate = "UPDATE tb_FILME
                SET  NOME_F = '$nome',
                    ANO_F = '$ano' ,
                    CATEGORIA_F = '$cat',
                    DIRETOR_F = '$dir' ,
                    DURACAO_F = '$dura'
                WHERE id_F = $id";
mysqli_query($conexao, $sqlUpdate);
mysqli_close($conexao);
