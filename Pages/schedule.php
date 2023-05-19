<!DOCTYPE html>
<html lang="pt-BR" translate="no">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/schedule.css">
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
                    $contacts = [
                        ['id' => '1', 'nome' => 'João', 'telefone' => '123456789'],
                        ['id' => '2', 'nome' => 'Maria', 'telefone' => '987654321'],
                        ['id' => '2', 'nome' => 'Maria', 'telefone' => '987654321'],
                        ['id' => '2', 'nome' => 'Maria', 'telefone' => '987654321'],
                        ['id' => '2', 'nome' => 'Maria', 'telefone' => '987654321'],
                        ['id' => '2', 'nome' => 'Maria', 'telefone' => '987654321'],
                        ['id' => '2', 'nome' => 'Maria', 'telefone' => '987654321'],
                        ['id' => '2', 'nome' => 'Maria', 'telefone' => '987654321'],
                        
                    ];
                    
                    foreach ($contacts as $contact) {
                        echo "<tr>";
                        echo "<td>" . $contact['id'] . "</td>";
                        echo "<td>" . $contact['nome'] . "</td>";
                        echo "<td>" . $contact['telefone'] . "</td>";
                        echo "<td class='btn'>
                                <button class='btn-edit'>
                                    <img src='../Media/pencil.png' alt='Editar'>
                                </button>
                                <button class='btn-delete'>
                                    <img src='../Media/trash.png' alt='Excluir'>
                                </button>
                            </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="../Pages/homePage.php">
            <button class="btn-back">Voltar</button>
        </a>
    </div>
</body>
</html>