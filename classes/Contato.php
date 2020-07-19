<?php
    class Contato{
        public $id;
        public $nome;
        public $telefone;
        private $conexao;

        public function __construct($con){
            $this->conexao = $con;
        }

        public function criar(){
            $SQL = "INSERT INTO contatos (nome, telefone) VALUES (:nome, :telefone)";
            
            $stmt = $this->conexao->prepare($SQL);
            $stmt -> bindParam(':nome', $this->nome);
            $stmt -> bindParam(':telefone', $this->telefone);

            if($stmt->execute()){
                return true;
            }
                return false;
        }

    }
?>