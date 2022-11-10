<?php
class Turma {
    private $nome_turma;
    private $sala;
    public function getNome_turma() {
        return $this->nome_turma;
    }

    public function getSala() {
        return $this->sala;
    }

    public function setNome_turma($nome_turma): void {
        $this->nome_turma = $nome_turma;
    }

    public function setSala($sala): void {
        $this->sala = $sala;
    }

}
