<?php

echo "Olá, Mundo!";

$nome = "Kevyn Renato";

$curso = "ADS";

$ch = 60;

$mensalidade = 899.99;

$status = true;

//Concatenação de variáveis

echo "<br>Seja Bem-dindo(a),". $nome;

echo "<h3>Seu curso é $curso </h3>";

echo "<h3>O curso de $curso custa $mensalidade por mês<h3>";

echo "O status atual de sua matricula e: $status";

//Tipos de dados

echo "<h2>Tipos de dados:</h2>";

echo "Variavel nome: " .gettype($nome)."<br>";

echo "Variavel curso: " .gettype($curso)."<br>";

echo "Variavel carga hóraria : " .gettype($ch)."<br>";

echo "Variavel mensalidade: " .gettype($mensalidade)."<br>";

echo "Variavel status: " .gettype($status)."<br>";

//Descrição da variavel 

echo "<h2>Descrição da variavel:</h2>";

echo var_dump($nome)."<br>";

echo var_dump($curso)."<br>";

echo var_dump($ch)."<br>";

echo var_dump($mensalidade)."<br>";

echo var_dump($status)."<br>";

?>