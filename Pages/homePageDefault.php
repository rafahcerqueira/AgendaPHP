<?php
    session_start();

    if (!isset($_SESSION['perfil']))
        header("Location: .././index.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/home.css">
    <title>AGENDA</title>
</head>
<body>
    <div class="content">
        <div class="content-left" style="background-color: #8000FF;">
            <h1>Menu Principal</h1>
            <div class="btn">
                <a href="./formQueryDefault.php"><button>CONSULTAR</button></a>
                <a href="./listagem.php"><button>VISUALIZAR LISTA</button></a>
            </div>
        </div>
        <div class="content-right">
            <img src="../Media/php.png" alt="Logo PHP">
        </div>
    </div>
</body>
</html>