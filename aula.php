<?php

# Conexão com o banco de dados MySQL *************************************
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


# Criando tabelas usando PHP ***********************************************
# Tabela cursos (nome do curso, carga horária)
$query = "CREATE TABLE CURSOS(
    id_curso int not null  auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id_curso)
    )";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (cursos)<br>";
} else {
    echo "Falha ao executar (cursos)<br>";
}    

# Tabela alunos (nome do aluno, data de nascimento)
$query = "CREATE TABLE ALUNOS(
    id_aluno int not null auto_increment,
    nome_aluno varchar (255) not null,
    data_nascimento varchar(255),
    primary key(id_aluno)
    )";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (alunos)<br>";
} else {
    echo "Falha ao executar (alunos)<br>";
} 

# Tabela alunos_cursos (aluno, curso)
$query = "CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key (id_aluno_curso)
    )";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (alunos_cursos)<br>";
} else {
    echo "Falha ao executar (alunos_cursos)<br>";
}


# Inserir dados nas tabelas *****************************************
$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES ('José', '01-01-1990')";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (insert alunos)<br>";
} else {
    echo "Falha ao executar (insert alunos)<br>";
}

$query = "INSERT INTO CURSOS (nome_curso, carga_horaria) VALUES ('PHP', 10)";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (insert cursos)<br>";
} else {
    echo "Falha ao executar (insert cursos)<br>";
}

$query = "INSERT INTO ALUNOS_CURSOS (id_aluno, id_curso) VALUES (8, 1)";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (insert alunos_cursos)<br>";
} else {
    echo "Falha ao executar (insert alunos_cursos)<br>";
}

?>


