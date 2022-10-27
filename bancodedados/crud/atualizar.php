<?php
require_once "../conexao.php";

$id =$_POST['id'];
$nome =$_POST['nome'];
$email =$_POST['email'];
$senha=$_POST['senha'];
$cpf=$_POST['cpf'];

//var_dump($_POST);

$stmt = $pdo->prepare("  UPDATE USUARIO SET  USUARIO_NOME = :nome,
                                                USUARIO_EMAIL= :email,
                                                USUARIO_SENHA= :senha,
                                                USUARIO_CPF= :cpf
                            WHERE USUARIO_ID = $id  ");
$stmt->bindParam('nome',$nome);
$stmt->bindParam('email',$email);
$stmt->bindParam('senha',$senha);
$stmt->bindParam('cpf',$cpf);

if($stmt->execute()){
    $atualizar = true;
}else{
    $atualizar = false;
}

include 'index.php';


