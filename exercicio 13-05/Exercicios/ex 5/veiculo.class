<?php

class Veiculo {

    public $marca;
    public $modelo;
    public $ano;
    public $velocidadeAtual = 0.0;

    // Método para acelerar
    public function acelerar($incremento) {

        $this->velocidadeAtual += $incremento;

        echo "Acelerando: velocidade atual = {$this->velocidadeAtual} km/h<br>";

    }

    // Método para frear
    public function frear($decremento) {

        $this->velocidadeAtual -= $decremento;

        // Evita velocidade negativa
        if ($this->velocidadeAtual < 0) {

            $this->velocidadeAtual = 0.0;

        }

        echo "Freando: velocidade atual = {$this->velocidadeAtual} km/h<br>";

    }
}