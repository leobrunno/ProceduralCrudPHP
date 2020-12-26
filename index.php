<?php
    include_once 'php_action/db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro de clientes</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
    <h3>Clientes</h3>
    <table>
        <thead>
            <tr>
                <th>Nome:</th>
                <th>Sobrenome:</th>
                <th>Email:</th>
                <th>Idade:</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql = "SELECT * FROM clientes";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):
                    while($dados = mysqli_fetch_array($resultado)):
            ?>
                        <tr>
                            <td><?= $dados['nome']; ?></td>
                            <td><?= $dados['sobrenome'];?></td>
                            <td><?= $dados['email'];?></td>
                            <td><?= $dados['idade'];?></td>

                            <td>
                                <form action="php_action/delete.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $dados['id'];?>">
                                    <button type="submit" name="btn-deletar">Delete</button>
                                </form><br>

                                <form action="editar.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $dados['id'];?>">
                                    <button type="submit" name="btn-editar">Editar</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    endwhile;
                else: ?>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                <?php
                endif;
                ?>
        </tbody>
    </table>
    <br>
    <a href="adicionar.php">Adicionar cliente</a>
</body>
</html>