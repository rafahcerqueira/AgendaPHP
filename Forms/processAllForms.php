<?php
    session_start();
    require_once('../BO/agendaBO.php');

    $agendaBO = new AgendaBO();

    if (isset($_POST['inserir'])) {
        $agendaBO->inserirContato($_POST['nome'], $_POST['telefone']);
        header("Location: ../Pages/formEdit.php"); 
    }

    if (isset($_GET['consulta'])) {
        $contacts = $agendaBO->consultarContato($_GET['id_contato']);
        $_SESSION['contacts'] = $contacts;
        header("Location: ../Pages/formQuery.php"); 
    }    
        
    if (isset($_POST['atualizar']) && isset($_POST['id_contato'])){
        $agendaBO->atualizarContato($_POST['id_contato'], $_POST['nome'], $_POST['telefone']);
        header("Location: ../Pages/formEdit.php"); 
    }

    if (isset($_POST['excluir']) && isset($_POST['id_contato'])) {
        $agendaBO->excluirContato($_POST['id_contato']);
        header("Location: ../Pages/formEdit.php"); 
    }
?>