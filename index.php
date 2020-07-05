<?php
    if(isset($_POST['nome'])){

        $nome = $_POST['nome'];
        file_put_contents("teste.txt ", $nome, FILE_APPEND);

        header("Location: index.php");
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" id="">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>