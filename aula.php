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



# Limpar tabelas do banco, delete sem where
/*
$query = "DELETE FROM ALUNOS";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (delete alunos)<br>";
} else {
    echo "Falha ao executar (delete alunos)<br>";
}

$query = "DELETE FROM CURSOS";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (delete cursos)<br>";
} else {
    echo "Falha ao executar (delete cursos)<br>";
}

$query = "DELETE FROM ALUNOS_CURSOS";

$executar = mysqli_query($conexao, $query);
if($executar){
    echo "Executado com sucesso (delete alunos_cursos)<br>";
} else {
    echo "Falha ao executar (delete alunos_cursos)<br>";
}



# Atualizando dados na tabela
if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'José Miguel' where id_aluno = 40")){
    echo "Sucesso";
}

if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Maria Alggg' where id_aluno = 42")){
    echo "Sucesso";
}

*/

echo '<table border=1>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Data de nascimento</th>
        </tr>';

$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");

while($linha = mysqli_fetch_array($consulta)){
    echo '<tr>';
    echo '<td>';
    echo $linha['id_aluno'];
    echo '</td>';
    echo '<td>';
    echo $linha['nome_aluno'];
    echo '</td>';
    echo '<td>';
    echo $linha['data_nascimento'];
    echo '</td>';
    echo '</tr>';
}

echo '</table>';

?>


