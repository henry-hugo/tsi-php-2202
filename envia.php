<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recebe.php" method="POST">
        <label for="nome">nome:</label>
        <input type="text" name="nome">
        <br>
        idade : 
        <input type="number" name="idade">
        <br>
        CPF : 
        <input type="text" name="cpf" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})">
        <br>
        <select name="periodo" id="periodo">
            <option value="">escolha</option>
            <option value="matutino">matutino</option>
            <option value="vespertino">vespertino</option>
            <option value="noturno">noturno</option>
        </select>
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>