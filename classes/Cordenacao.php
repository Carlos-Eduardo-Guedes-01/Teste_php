<?php
require_once './Pessoa.php';
class Cordenacao extends Pessoa{
    private $matricula;
    private $senha_admin;
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

        public function getSenha_admin() {
        return $this->senha_admin;
    }

    public function setSenha_admin($senha_admin): void {
        $this->senha_admin = $senha_admin;
    }

    public function realizaLogin() {
        echo 'Login de ADM realizado com sucesso!';
    }
}
