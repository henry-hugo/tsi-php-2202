<?php
    require_once "../conexao.php";

    $stmt = $pdo->query("SELECT USUARIO_ID, USUARIO_NOME, USUARIO_EMAIL, USUARIO_SENHA, USUARIO_CPF FROM USUARIO  ");
    $alunos = [];
			while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
	                $alunos[] = $registro;
        }

        include 'viws/lista.php';
			
            
