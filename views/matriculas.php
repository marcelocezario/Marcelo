<a href="?pagina=inserir_matricula">Matricular aluno</a>

<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome aluno</th>
        <th>Nome curso</th>
        <th>Deletar</th>
    </tr>

    <?php
    while ($linha = mysqli_fetch_array($consulta_matriculas)) {
        echo '<tr>';
        echo '<td>' . $linha['nome_aluno'] . '</td>';
        echo '<td>' . $linha['nome_curso'] . '</td>';
    ?>
        <td><a href="deleta_matricula.php?id_matricula=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td>
        </tr>

    <?php
    }
    ?>

</table>