<?php
require_once '../conexao.php'; //pega a conexao do banco de dados para essa pagina

$nome =$_POST['nome'];
$email =$_POST['email'];
$senha =$_POST['senha'];
$cpf =$_POST['cpf'];


//echo "$nome $turno  $inicio <br>";

//var_dump($_POST);

$objStmt =$pdo->prepare(' INSERT INTO USUARIO (USUARIO_NOME, USUARIO_EMAIL, USUARIO_SENHA, USUARIO_CPF) 
                VALUE (:nome,  :email,  :senha, :cpf )');  //$objStmt esta recebendo os dados do prepare :nome e um link da variavel que vai vim d post

$objStmt->bindParam('nome',$nome);
$objStmt->bindParam('email',$email);
$objStmt->bindParam('senha',$senha);
$objStmt->bindParam('cpf',$cpf);


//verificar se gravou ou nao 
if ($objStmt->execute()) {
    $gravou = true;
    include 'index.php';
}else{
    $gravou = false;
    include 'index.php';
}