<?php

class Temperatura {

    public $celsius;

    // Converter para Fahrenheit
    public function paraFahrenheit() {

        return ($this->celsius * 9/5) + 32;

    }

    // Converter para Kelvin
    public function paraKelvin() {

        return $this->celsius + 273.15;

    }

    // Método para exibir os resultados
    public function apresentar() {

        echo number_format($this->celsius, 2, ".", "") . "°C";
        echo " = " . number_format($this->paraFahrenheit(), 2, ".", "") . "°F";
        echo " = " . number_format($this->paraKelvin(), 2, ".", "") . "K";
        echo "<br>";

    }
}