<?php

require "Pessoa.php";
require "Programador.php";

/*
# sem utilizar construtor

$uma_pessoa = new Pessoa;
$uma_pessoa->setNome("Marcelo");
echo $uma_pessoa->getNome();

*/
/*
# utilizando construtor

$uma_pessoa = new Pessoa ("Bruno");

echo $uma_pessoa->getNome();

echo "<br><br>";

$uma_pessoa->setNome("testets");

echo $uma_pessoa->getNome();
*/

$programador = new Programador ("Diego", "PHP");

echo $programador->getNome();

# constantes
echo $programador::ESPECIE;


