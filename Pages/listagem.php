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
    <link rel="stylesheet" href="../Styles/formEdit.css">
    <title>AGENDA</title>
</head>
<body>
    <div class="table-content">
        <h1>Todos os Contatos</h1>

        <table class="contacts-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("../DAO/agendaDAO.php");

                    $agendaDAO = new AgendaDAO();
                    $contacts = $agendaDAO->listarContatos(); 
                    
                    if (count($contacts) == 0)
                        echo "<tr><td colspan='4'>Nenhum contato encontrado</td></tr>";
                    else                    
                        foreach ($contacts as $contact) {
                            echo "<tr>";
                            echo "<td>" . $contact['id'] . "</td>";
                            echo "<td>" . "<input class='input_text' type='text' name='nome' value='" . $contact['nome'] . "'>" . "</td>";
                            echo "<td>" . "<input class='input_text' type='text' name='telefone' value='" . $contact['telefone'] . "'>" . "</td>";
                            echo "</tr>";
                        }
                ?>
            </tbody>

            </tbody>
        </table>
        <a href="../Pages/homePageDefault.php">
            <button class="btn-back">Voltar</button>
        </a>
    </div>
</body>
</html>