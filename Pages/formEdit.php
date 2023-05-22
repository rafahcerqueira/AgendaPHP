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
                    <th>Opções</th>
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
                            echo "<td>" . $contact['id'] . "<form method='POST' action='../Forms/processAllForms.php'>"  . "</td>";
                            echo "<td>" . "<input class='input_text' type='text' name='nome' value='" . $contact['nome'] . "'>" . "</td>";
                            echo "<td>" . "<input class='input_text' type='text' name='telefone' value='" . $contact['telefone'] . "'>" . "</td>";
                            echo "<td class='btn'>
                                        <input type='hidden' name='id_contato' value='" . $contact['id'] . "'>
                                        <button type='submit' name='atualizar' class='btn-edit a'>
                                            <img src='../Media/pencil.png' alt='Editar'>
                                        </button>
                                        <button type='submit' name='excluir' class='btn-delete a'>
                                            <img src='../Media/trash.png' alt='Excluir'>
                                        </button>
                                    </form>
                                </td>";
                            echo "</tr>";
                        }
                ?>
            </tbody>

            </tbody>
        </table>
        <a href="../Pages/homePage.php">
            <button class="btn-back">Voltar</button>
        </a>
    </div>
</body>
</html>