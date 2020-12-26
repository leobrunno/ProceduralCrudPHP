<?php
    include_once 'php_action/db_connect.php';

    if(isset($_POST['id'])):
        $id = mysqli_escape_string($connect, $_POST['id']);
        
        $sql = "SELECT * FROM clientes WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
    endif;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/form_style.css" rel="stylesheet">
    <title>Sistema de cadastro de clientes</title>
</head>
<body>
    <h1>Atualizando Cliente</h1>
    <form action="php_action/update.php" method="POST">
        <input type="hidden" name="id" value="<?= $dados['id']?>">

        <input type="text" name="nome" id="nome" value="<?= $dados['nome'];?>">
        <label for="nome">Nome</label>

        <input type="text" name="sobrenome" id="sobrenome" value="<?= $dados['sobrenome'];?>">
        <label for="sobrenome">Sobrenome</label>

        <input type="text" name="email" id="email" value="<?= $dados['email'];?>">
        <label for="email">Email</label>

        <input type="text" name="idade" id="idade" value="<?= $dados['idade'];?>">
        <label for="idade">Idade</label>

        <input type="submit" class="editar" name="btn-editar" value="Editar"/>
        <a href="index.php">Lista de clientes</a>
    </form>
</body>
</html>