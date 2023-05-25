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
        <h1>Consultar Contato</h1>

        <form action="../Forms/processAllForms.php" class="form-content" method="GET">
            <div class="">
                <div class="">
                    <div class="">
                        <input type="text" name="id_contato" placeholder="Id do contato:">
                    </div>
                </div>
            </div>

            <div class="btn">   
                <a href="homePageDefault.php">
                    <button type="button" class="btn-back">Voltar</button>
                </a>
                <button type="submit" name="consultaPadrao" class="btn-include">Consultar</button>
            </div>
        </form>

        <div class="result">
            <?php
                if (isset($_SESSION['contacts'])) {
                    $contacts = $_SESSION['contacts'];

                    if (!empty($contacts)) {
                        echo "<h2>Resultado da consulta:</h2><br>";

                        foreach ($contacts as $contact) {
                            echo "<p><strong>Id:</strong> " . $contact['id'] . "</p>";
                            echo "<p><strong>Nome:</strong> " . $contact['nome'] . "</p>";
                            echo "<p><strong>Telefone:</strong> " . $contact['telefone'] . "</p>";
                            echo "<br>";
                        }
                    } else 
                        echo "<span>Nenhum contato encontrado.</span>";

                    unset($_SESSION['contacts']);
                }            
            ?>
        </div>
    </div>
</body>
</html>