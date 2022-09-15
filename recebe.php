<?php
echo ' bem vindo(a) ' . $_POST["nome"];
echo '<br> idade ' . $_POST["idade"];
echo '<br> cpf ' . $_POST["cpf"];
echo '<br> periodo ' . $_POST["periodo"];

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$cpf = $_POST["cpf"];
$periodo = $_POST["periodo"];

$arquivo = fopen('alunos.csv','a'); //abre o arquivo  para append
fwrite($arquivo, "$nome,$idade,$cpf,$periodo\r\n");
fclose($arquivo);
?>