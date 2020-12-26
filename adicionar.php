<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro de clientes</title>
    <link href="style/form_style.css" rel="stylesheet">
</head>
<body>
    <h1>Novo Cliente</h1>
    <form action="php_action/create.php" method="POST">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome</label>

        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome">Sobrenome</label>

        <input type="text" name="email" id="email">
        <label for="email">Email</label>

        <input type="text" name="idade" id="idade">
        <label for="idade">Idade</label><br>

        <input type="submit" class="enviar" name="btn-cadastrar"/>
        <a href="index.php">Lista de clientes</a>
    </form>
</body>
</html>