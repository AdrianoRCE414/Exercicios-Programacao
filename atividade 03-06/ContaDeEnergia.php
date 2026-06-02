<?php

class ContaDeEnergia {

    private $titular;
    private $consumoKwh;
    private $tarifaPorKwh;

    public function getTitular() {
        return $this->titular;
    }

    public function setTitular($titular) {
        $this->titular = $titular;
    }

    public function getConsumoKwh() {
        return $this->consumoKwh;
    }

    public function setConsumoKwh($consumoKwh) {
        if ($consumoKwh >= 0) {
            $this->consumoKwh = $consumoKwh;
        }
    }

    public function getTarifaPorKwh() {
        return $this->tarifaPorKwh;
    }

    public function setTarifaPorKwh($tarifaPorKwh) {
        if ($tarifaPorKwh > 0) {
            $this->tarifaPorKwh = $tarifaPorKwh;
        }
    }

    public function exibir() {
        $total = $this->consumoKwh * $this->tarifaPorKwh;

        return "Titular: $this->titular | Consumo: $this->consumoKwh kWh | Tarifa: R$ $this->tarifaPorKwh/kWh | Total: R$ $total";
    }
}

$conta = new ContaDeEnergia();

$conta->setTitular("Maria");
$conta->setConsumoKwh(250);
$conta->setTarifaPorKwh(0.95);

echo $conta->exibir();

?>