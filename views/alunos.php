<table style="border:1px solid #ccc; width: 100%">
    <tr>
        <th>Nome aluno</th>
        <th>Data nascimento</th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta_alunos)){
            echo '<tr>';
            echo '<td>'.$linha['nome_aluno'].'</td>';
            echo '<td>'.$linha['data_nascimento'].'</td>';
            echo '</tr>';
        }
    ?>

</table>