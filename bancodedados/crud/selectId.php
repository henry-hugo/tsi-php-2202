<?php
 require_once "../conexao.php";

 $id =$_POST['id'] ?? 0;

 $id = preg_replace('/\D/','',$id);

 $stmt =$pdo->query ("SELECT USUARIO_ID, USUARIO_NOME, USUARIO_EMAIL, USUARIO_SENHA, USUARIO_CPF FROM USUARIO WHERE USUARIO_ID = $id ");
 $usuario=$stmt->fetch(PDO::FETCH_ASSOC);
 //var_dump($usuario);

?>
