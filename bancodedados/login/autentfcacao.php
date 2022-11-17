<?php
require_once '../conexao.php';
//trim()  tira o espaço do começo
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);

/*if(empty($_POST["CardConform"])){
    header('location: index.php');
}*/

$stmt = $pdo->prepare(" SELECT USUARIO_NOME , USUARIO_SENHA 
                        FROM USUARIO 
                        WHERE USUARIO_EMAIL = :email");
$stmt->bindParam(':email', $email);

$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

$autenticou = false;

if(isset($usuario['USUARIO_NOME'])){
    if(password_verify($password,$usuario['USUARIO_SENHA'])){

        session_start();
        $_SESSION['nome'] = $usuario['USUARIO_NOME'];
        header('Location:../crud/index.php');
        exit();
    }
}

include 'index.php';


