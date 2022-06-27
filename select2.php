<?php
 //mudar icone do botão <button type="submit" class="btn btn-danger"><
    require("conecta.php");

    $sqlSelect = "SELECT * FROM tb_FILME";
    $respostas = mysqli_query($conexao, $sqlSelect);
?>
<link rel="stylesheet"  href="style/pags2.css"/>
<table class=" font box2 table table-striped table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Ano</th>
        <th>Categoria</th>
        <th>Diretor</th>
        <th>Duração</th>
      </tr>
    </thead>
    <tbody>
<?php while($linha = mysqli_fetch_assoc($respostas)){?>
        <tr>
            <td><?php echo $linha['NOME_F']?></td>
            <td><?php echo $linha['ANO_F']?></td>
            <td><?php echo $linha['CATEGORIA_F']?></td>
            <td><?php echo $linha['DIRETOR_F']?></td>
            <td><?php echo $linha['DURACAO_F']?></td>
            <td>
              <form action="excluir.php" method="POST">
              <input type="hidden" name="id"value="<?php echo $linha['id_F']?>"/>
              <input class= "botao" type="submit" value="Excluir"/></form>
            </td>
        </tr>
<?php }?>
    </tbody>
  </table>