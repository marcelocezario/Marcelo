<a href="?pagina=inserir_aluno">
    <span style="font-size: 48px; color: Dodgerblue;">
        <i class="fas fa-plus-circle"></i>
    </span>
</a>

<table class="table table-hover table-striped" id="alunos">
    <thead>
        <tr>
            <th>Nome aluno</th>
            <th>Data nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($consulta_alunos)) {
            echo '<tr>';
            echo '<td>' . $linha['nome_aluno'] . '</td>';
            echo '<td>' . $linha['data_nascimento'] . '</td>';
        ?>
            <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">
                    <span style="color: #0067FF;">
                        <i class="far fa-edit"></i>
                    </span>

                </a></td>
            <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">
                    <span style="color: #FF0000;">
                        <i class="far fa-trash-alt"></i>
                    </span>
                </a></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>