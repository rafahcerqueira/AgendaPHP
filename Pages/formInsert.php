<?php
    session_start();

    if (!isset($_SESSION['perfil']))
        header("Location: .././index.php");
?>

<!DOCTYPE html>
<html lang="pt-BR" translate="no">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/global.css">
    <link rel="stylesheet" href="../Styles/result.css">
    <title>AGENDA</title>
</head>

<body>
    <div class="content">
        <h1>Adicionar Novo Contato</h1>

        <form action="../Forms/processAllForms.php" class="form-content" method="post">
            <div>
                <div>
                    <div>
                        <input autocomplete="off" minlength="2" type="text" name="nome" placeholder="Nome" required>
                    </div>
                    <div>
                        <input autocomplete="off" minlength="11" type="tel" name="telefone" placeholder="Telefone" required>
                    </div>
                </div>
            </div>

            <div class="btn">
                <a href="homePage.php">
                    <button type="button" class="btn-back">Voltar</button>
                </a>
                <button type="submit" name="inserir" class="btn-include">Adicionar</button>
            </div>
        </form>
    </div>
</body>

</html>