<?php
include_once './Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    private $responsavel;
    private $senha;
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

        public function getCurso() {
        return $this->curso;
    }

    public function getResponsavel() {
        return $this->responsavel;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }

    public function setResponsavel($responsavel): void {
        $this->responsavel = $responsavel;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }
    public function realizaLogin() {
        echo 'Login realizado com sucesso!';
    }

}
