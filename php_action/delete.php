<?php
    require_once 'db_connect.php';

    if(isset($_POST['btn-deletar'])):
        $id = mysqli_escape_string($connect, $_POST['id']);
        $sql = "DELETE FROM clientes WHERE id = '$id'";

        if(mysqli_query($connect, $sql)):
            header('Location: ..index.php?sucess');
        else:
            header('Location: index.php?error');
        endif;
    endif;
?>