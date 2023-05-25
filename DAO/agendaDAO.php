<?php
    require_once('../Util/connectionDB.php');

    class AgendaDAO {
        
        private $conexao;
        
        public function __construct() {
            // Cria uma instância do objeto PDO para estabelecer a conexão com o banco de dados MySQL
            // Utiliza as informações de host, porta, nome do banco, usuário e senha
            $this->conexao = new PDO("mysql:host=localhost;port=3306;dbname=agenda","root","");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        
        public function inserirContato($nome, $telefone) {
            try {
                $sql = "INSERT INTO contatos (nome, telefone) VALUES (:nome, :telefone)";

                // Prepara a consulta SQL para execução
                // Insere os valores :nome e :telefone nos lugares correspondentes na consulta
                // Executa a consulta com os valores fornecidos
                $this->conexao->prepare($sql)->execute([
                    ':nome' => $nome,
                    ':telefone' => $telefone
                ]);
            } catch (PDOException $e) {
                echo "Erro ao inserir contato: " . $e->getMessage();
            }
        }
        
        public function consultarContato($id_contato) {
            try {
                $sql = "SELECT * FROM contatos WHERE id = :id_contato";
                
                $stmt = $this->conexao->prepare($sql);
                $stmt->execute(['id_contato' => $id_contato]);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Erro ao consultar contato: " . $e->getMessage();
            }
        }
        
        public function excluirContato($id) {
            try {
                $sql = "DELETE FROM contatos WHERE id = :id";

                $this->conexao->prepare($sql)->execute([':id' => $id]);
            } catch (PDOException $e) {
                echo "Erro ao excluir contato: " . $e->getMessage();
            }
        }
        
        
        public function atualizarContato($id, $nome, $telefone) {
            try {
                $sql = "UPDATE contatos SET nome = :nome, telefone = :telefone WHERE id = :id";

                $this->conexao->prepare($sql)->execute([
                    ':id' => $id,
                    ':nome' => $nome,
                    ':telefone' => $telefone
                ]);
            } catch (PDOException $e) {
                echo "Erro ao atualizar contato: " . $e->getMessage();
            }        
        }

        public function listarContatos() {
            try{
                $sql = "SELECT * FROM contatos";

                $stmt = $this->conexao->query($sql);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Erro ao listar contatos: " . $e->getMessage();
            }    
        }

        // public function login($usuario, $senha){
        //     try{
        //         $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";

        //         $stmt = $this->conexao->prepare($sql);
        //         $stmt->execute([
        //             'usuario' => $usuario, 
        //             'senha' => $senha
        //         ]);
        //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     } catch (PDOException $e) {
        //         echo "Erro ao listar contatos: " . $e->getMessage();
        //     }
        // }
    }
?>