<?php

use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

require_once '../DAO/agendaDAO.php';

class AgendaBO {
    
    private $agendaDAO;
    
    public function __construct() {
        $this->agendaDAO = new AgendaDAO();
    }
    
    public function inserirContato($nome, $telefone) {
        $this->agendaDAO->inserirContato(strtoupper($nome), $telefone); //Colocar validação de telefone
    }
    
    public function consultarContato($id_contato) {
        return $this->agendaDAO->consultarContato(strtoupper($id_contato));
    }
    
    public function excluirContato($id) {
        $this->agendaDAO->excluirContato($id);
    }
    
    public function atualizarContato($id, $nome, $telefone) {
        $this->agendaDAO->atualizarContato($id, strtoupper($nome), $telefone);
    }
    
    public function selecionarContato($id) {
        return $this->agendaDAO->selecionarContato($id);
    }
}