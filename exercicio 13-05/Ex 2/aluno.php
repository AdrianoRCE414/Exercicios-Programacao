<?php

class Aluno {

    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;

    // Método para calcular média
    public function calcularMedia() {

        return ($this->nota1 + $this->nota2) / 2;

    }

    // Método para apresentar os dados
    public function apresentar() {

        echo "Aluno: {$this->nome} | Média: " . $this->calcularMedia() . "<br>";

    }
}