<?php
    class Pessoa{
        private $id_pessoa;
        private $nome_pessoa;
        private $dataNascimento;
        public function getId_pessoa() {
            return $this->id_pessoa;
        }

        public function getNome_pessoa() {
            return $this->nome_pessoa;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setId_pessoa($id_pessoa): void {
            $this->id_pessoa = $id_pessoa;
        }

        public function setNome_pessoa($nome_pessoa): void {
            $this->nome_pessoa = $nome_pessoa;
        }

        public function setDataNascimento($dataNascimento): void {
            $this->dataNascimento = $dataNascimento;
        }
        public function realizaLogin(){
           
        }

    }
?>