<?php
    // Conexaão com banco de dados
    require("conecta.php");

    // exibir todos os registro da tabela usuario

    $sqlSelect = "SELECT * FROM tb_FILME";

    //Executar np banco

    $respostas = mysqli_query($conexao, $sqlSelect);

    //Quantos registros tem na tabela

    echo mysqli_num_rows($respostas);

    //exibir valores da tabela
   // $campo = mysqli_fetch_assoc($respostas);

    //exibir
   // echo $campo["nome_us"];
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Ano</th>";
    echo "<th>Categoria</th>";
    echo "<th>Diretor</th>";
    echo "<th>Duração</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    while($linha = mysqli_fetch_assoc($respostas)){
        echo "<tr>";
        echo "<td>".$linha['NOME_F']."</td><td>".$linha['ANO_F']."</td>";
        <td>".$linha['CATEGORIA_F']."</td><td>".$linha['DIRETOR_F']."</td><td>".$linha['DURACAO_F']."</td>;
        #echo "<td>".$linha[1]."</td><td>".$linha[2]."</td><td>".$linha[3]."</td><td>".$linha[4]."</td><td>".$linha[5]."</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

?>