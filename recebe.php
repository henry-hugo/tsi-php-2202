<?php
echo ' bem vindo(a) ' . $_POST["nome"];
echo '<br> idade ' . $_POST["idade"];
echo '<br> cpf ' . $_POST["cpf"];
echo '<br> periodo ' . $_POST["periodo"];

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$cpf = $_POST["cpf"];
$periodo = $_POST["periodo"];
/*
$_SERVER POSSUI MUITAS VARIAVEIS DE AMBIENTE QUE PODEM SER MUITO IMPORTANTES
 PARA VOC EM ALGUM MOMENTO EX :IP DO REQUISITANTE
 */

$arquivo = fopen('alunos.csv','a'); //abre o arquivo  para append
fwrite($arquivo, "$nome,$idade,$cpf,$periodo{$_SERVER['REMOTE_ADDR']}\r\n");
fclose($arquivo);
?>