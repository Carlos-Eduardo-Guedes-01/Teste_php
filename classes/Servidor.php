<?php
require_once './Pessoa.php';
class Servidor extends Pessoa{
    private $matricula;
    private $area;
    private $senha;
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

        public function getArea() {
        return $this->area;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setArea($area): void {
        $this->area = $area;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }
    public function realizaLogin() {
        echo 'Login de servidor realizado com sucesso!';
    }

}
