<?php
require_once '../conexao.php'; //pega a conexao do banco de dados para essa pagina

$nome =$_POST['nome'];
$turno =$_POST['periodo'];
$inicio =$_POST['inicio'];


//echo "$nome $turno  $inicio <br>";

//var_dump($_POST);

$objStmt =$pdo->prapare(' INSERT INTO alunos (nome, turno, inicio) 
                VALUE (:nome  :turno  :inicio )');  //$objStmt esta recebendo os dados do prepare :nome e um link da variavel que vai vim d post

$objStmt->bindParam('nome',$nome);
$objStmt->bindParam('turno',$turno);
$objStmt->bindParam('inicio',$inicio);


//verificar se gravou ou nao 
if ($objStmt->execute()) {
    echo "salvo com sucesso";
}else{
    echo "erro";
}