<?php
class Curso {
    private $areaCurso;
    private $nomeCurso;
    private $turnoCurso;
    public function getAreaCurso() {
        return $this->areaCurso;
    }

    public function getNomeCurso() {
        return $this->nomeCurso;
    }

    public function getTurnoCurso() {
        return $this->turnoCurso;
    }

    public function setAreaCurso($areaCurso): void {
        $this->areaCurso = $areaCurso;
    }

    public function setNomeCurso($nomeCurso): void {
        $this->nomeCurso = $nomeCurso;
    }

    public function setTurnoCurso($turnoCurso): void {
        $this->turnoCurso = $turnoCurso;
    }


}
