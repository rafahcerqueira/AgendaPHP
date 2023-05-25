<?php
    session_start();
    require_once('../BO/agendaBO.php'); // Inclui o arquivo agendaBO.php

    $agendaBO = new AgendaBO(); // Instancia a classe AgendaBO

    // Verifica se o formulário foi enviado atrávez do botão 'inserir'
    if (isset($_POST['inserir'])) {
        // Chama o método inserirContato da classe AgendaBO passando os valores do formulário
        $agendaBO->inserirContato($_POST['nome'], $_POST['telefone']);
        
        header("Location: ../Pages/formEdit.php"); // Redireciona para a página formEdit.php
    }

    if (isset($_GET['consulta'])) {
        $contacts = $agendaBO->consultarContato($_GET['id_contato']);
        $_SESSION['contacts'] = $contacts; // Armazena os contatos na sessão
        header("Location: ../Pages/formQuery.php");
    }    
        
    if (isset($_POST['atualizar']) && isset($_POST['id_contato'])){
        // Chama o método atualizarContato da classe AgendaBO passando os valores do formulário
        $agendaBO->atualizarContato($_POST['id_contato'], $_POST['nome'], $_POST['telefone']);
        header("Location: ../Pages/formEdit.php");
    }

    if (isset($_POST['excluir']) && isset($_POST['id_contato'])) {
        $agendaBO->excluirContato($_POST['id_contato']);
        header("Location: ../Pages/formEdit.php");
    }
?>
