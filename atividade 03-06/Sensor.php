<?php

class Sensor {

    private $identificador;
    private $leituraAtual;
    private $limiteMaximo;

    public function getIdentificador() {
        return $this->identificador;
    }

    public function setIdentificador($identificador) {
        $this->identificador = $identificador;
    }

    public function getLeituraAtual() {
        return $this->leituraAtual;
    }

    public function setLeituraAtual($leituraAtual) {
        $this->leituraAtual = $leituraAtual;
    }

    public function getLimiteMaximo() {
        return $this->limiteMaximo;
    }

    public function setLimiteMaximo($limiteMaximo) {
        if ($limiteMaximo > 0) {
            $this->limiteMaximo = $limiteMaximo;
        } else {
            echo "Limite inválido!<br>";
        }
    }

    public function exibir() {
        return "Sensor: $this->identificador | Leitura: {$this->leituraAtual}°C | Limite Máximo: {$this->limiteMaximo}°C";
    }
}

$sensor = new Sensor();

$sensor->setIdentificador("S001");
$sensor->setLeituraAtual(25.5);
$sensor->setLimiteMaximo(-10);
$sensor->setLimiteMaximo(40);

echo $sensor->exibir();

?>