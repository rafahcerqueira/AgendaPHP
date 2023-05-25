<?php
    require_once '../DAO/agendaDAO.php'; // Inclui o arquivo agendaDAO.php

    class AgendaBO {
        
        private $agendaDAO; // Declaração de uma propriedade privada $agendaDAO
        
        public function __construct() {
            $this->agendaDAO = new AgendaDAO(); // Instancia a classe AgendaDAO e atribui à propriedade $agendaDAO
        }
        
        public function inserirContato($nome, $telefone) {
            $this->agendaDAO->inserirContato(strtoupper($nome), $telefone); // Chama o método inserirContato da classe AgendaDAO
        }
        
        public function consultarContato($id_contato) {
            return $this->agendaDAO->consultarContato($id_contato);
        }
        
        public function excluirContato($id) {
            $this->agendaDAO->excluirContato($id);
        }
        
        public function atualizarContato($id, $nome, $telefone) {
            $this->agendaDAO->atualizarContato($id, strtoupper($nome), $telefone);
        }

        // public function login($usuario, $senha) {
        //     $this->agendaDAO->login($usuario, $senha);
        // }
    }
?>
