<?php
 include_once 'selectId.php';

?>



<form action="atualizar.php" method="post">
    <input type="hidden" name="id" value="<?php echo $usuario['USUARIO_ID']?>">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?php echo $usuario['USUARIO_NOME']?>">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $usuario['USUARIO_EMAIL']?>">
    <br>
    <label for="senha">Senha</label>
    <input type="password" name="senha" id="senha" value="<?php echo $usuario['USUARIO_SENHA']?>">
    <br>
    <label for="cpf">CPF</label>
    <input type="number" name="cpf" id="cpf" value="<?php echo $usuario['USUARIO_CPF']?>">
    <br>
    <button type="submit">Enviar</button>

</form>