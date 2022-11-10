<?php
class Pertence {
    private $nome_pertence;
    private $cor_pertence;
    private $tipo_pertence;
    private $local_encontrado;
    public function getNome_pertence() {
        return $this->nome_pertence;
    }

    public function getCor_pertence() {
        return $this->cor_pertence;
    }

    public function getTipo_pertence() {
        return $this->tipo_pertence;
    }

    public function getLocal_encontrado() {
        return $this->local_encontrado;
    }

    public function setNome_pertence($nome_pertence): void {
        $this->nome_pertence = $nome_pertence;
    }

    public function setCor_pertence($cor_pertence): void {
        $this->cor_pertence = $cor_pertence;
    }

    public function setTipo_pertence($tipo_pertence): void {
        $this->tipo_pertence = $tipo_pertence;
    }

    public function setLocal_encontrado($local_encontrado): void {
        $this->local_encontrado = $local_encontrado;
    }
}
