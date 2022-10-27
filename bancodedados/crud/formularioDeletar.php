<?php
require_once '../conexao.php';

$id =$_POST['id'] ?? 0;

$id = preg_replace('/\D/','',$id);

if($pdo->exec("DELETE FROM USUARIO WHERE USUARIO_ID=  $id ")){
    $apagado = true;
}else{
    $apagado = false;
}
include 'index.php';