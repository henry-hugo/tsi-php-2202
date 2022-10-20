<!DOCTYPE html>
<html lang="pt-br">
<head>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-buttons.html" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<title>tabela aluno</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
</head>
<body>
    
    <div>
        <a  href="formIncluir.php"><button class="btn">voltar</button></a>
    </div>
    <div class="container">
    <table class="table table-dark table-striped">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">CPF</th>
            <th scope="col">SENHA</th>
            <th scope="col">editar</th> 
            <th scope="col">atualizar</th>          
        </tr>
        
            <?php

            if(isset ($gravou)){
                if(!$gravou){
                echo '<div class="alert alert-primary" role="alert">
                            erro ao gravar
                        </div>';
                }else{
                    echo '<div class="alert alert-primary" role="alert">
                          gravar com sucesso
                        </div>';
                }
            }
            foreach($alunos as $aluno){
                echo"  
                <tbody id='myTable'>
				<tr>
					<td>
						
						{$aluno['USUARIO_ID']}
						    
					
					</td>
					<td>
						
						 {$aluno['USUARIO_NOME']}
						
					</td>
					<td>
						
						 {$aluno['USUARIO_EMAIL']}
						
					</td> 
                    <td>
						
						
						 {$aluno['USUARIO_CPF']}
						
					</td>   
					<td>
						
						
						 {$aluno['USUARIO_SENHA']}
						
					</td>
                    <td>
						
						<a href='atualizar/atualizar.php'>Atualizar</a>
						 
						
					</td>
                    <td>
						
                    <a href='atualizar/deletar.php'>Deletar</a>
						
					</td>
                    </tbody>
                    </div>";

            }
            
            ?>
        
    </table>    
    
</body>
</html>