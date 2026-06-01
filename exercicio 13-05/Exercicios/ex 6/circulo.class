<?php

class Circulo {

    public $raio;

    // Método para calcular área
    public function calcularArea() {

        return pi() * pow($this->raio, 2);

    }

    // Método para calcular circunferência
    public function calcularCircunferencia() {

        return 2 * pi() * $this->raio;

    }

    // Método para exibir os dados
    public function apresentar() {

        echo "Raio = " . number_format($this->raio, 2, ".", "") . " cm";
        echo " | Área = " . number_format($this->calcularArea(), 2, ".", "") . " cm²";
        echo " | Circunferência = " . number_format($this->calcularCircunferencia(), 2, ".", "") . " cm";
        echo "<br>";

    }
}