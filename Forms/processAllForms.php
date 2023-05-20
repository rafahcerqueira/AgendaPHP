<?php
    require_once('../BO/agendaBO.php');

    $agendaBO = new AgendaBO();

    if (isset($_POST['inserir'])) 
        $agendaBO->inserirContato($_POST['nome'], $_POST['telefone']);

    if (isset($_POST['consulta'])) 
        $contato = $agendaBO->consultarContato($_POST['id_contato']);
        
    if (isset($_POST['atualizar']))
        $agendaBO->atualizarContato($_POST['id_contato'], $_POST['nome'], $_POST['telefone']);

    if (isset($_POST['excluir'])) 
        $agendaBO->excluirContato($_POST['id_contato']);

    header("Location: ../Pages/formEdit.php"); 
?>