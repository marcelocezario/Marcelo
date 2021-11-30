<?php

include 'db.php';

$id_matricula = $_GET['id_matricula'];

$query = "DELETE FROM alunos_cursos WHERE ID_ALUNO_curso = $id_matricula";

mysqli_query($conexao, $query);

header('location:index.php?pagina=matriculas');