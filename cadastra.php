<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro novo contato</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        include 'conecta.php';
    ?>
    <h1>Cadastro novo contato</h1>
    <form action="cadastrar.php">
        <label for="fname">Nome:</label><br>
        <input type="text" id="fname" name="fname"><br>
        <label for="telefone">Telefone:</label><br>      
        <input type="text" id="lname" name="lname"><br><br>
        <input type="submit" value="Cadastrar">
</form>
</body>
</html>