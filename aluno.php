<?php

class Aluno {
    private $nome;
    private $nota1;
    private $nota2;
    private $nota3;
    private $faltas;

    public function setNome($nome) {
        $this->nome = trim((string) $nome);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNota1($nota1) {
        $this->nota1 = $this->validarNota($nota1);
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function setNota2($nota2) {
        $this->nota2 = $this->validarNota($nota2);
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function setNota3($nota3) {
        $this->nota3 = $this->validarNota($nota3);
    }

    public function getNota3() {
        return $this->nota3;
    }

    public function setFaltas($faltas) {
        $this->faltas = $this->validarFaltas($faltas);
    }

    public function getFaltas() {
        return $this->faltas;
    }

    private function validarNota($nota) {
        $valor = (float) $nota;

        if ($valor < 0 || $valor > 10) {
            return 0;
        }

        return $valor;
    }

    private function validarFaltas($faltas) {
        $valor = (int) $faltas;

        if ($valor < 0 || $valor > 80) {
            return 0;
        }

        return $valor;
    }

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    public function mostrarResultado() {
        $media = $this->calcularMedia();

        if ($this->percentualPresenca() < 75) {
            return "Reprovado por falta";
        }

        if ($media < 5) {
            return "Reprovado!";
        } elseif ($media < 7) {
            return "Recuperação!";
        }

        return "Aprovado!";
    }

    public function percentualPresenca() {
        $totalAulas = 80;
        $aulasPresente = $totalAulas - $this->faltas;
        return ($aulasPresente / $totalAulas) * 100;
    }

    public function percentualFaltas() {
        $totalAulas = 80;
        return ($this->faltas / $totalAulas) * 100;
    }
}
