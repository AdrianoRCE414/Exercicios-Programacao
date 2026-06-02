<?php

class Imovel {

    private $endereco;
    private $areaM2;
    private $valorAluguel;

    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getAreaM2() {
        return $this->areaM2;
    }

    public function setAreaM2($areaM2) {
        if ($areaM2 > 0) {
            $this->areaM2 = $areaM2;
        }
    }

    public function getValorAluguel() {
        return $this->valorAluguel;
    }

    public function setValorAluguel($valorAluguel) {
        if ($valorAluguel > 0) {
            $this->valorAluguel = $valorAluguel;
        }
    }

    public function exibir() {
        return "Imóvel: $this->endereco | Área: $this->areaM2 m² | Aluguel: R$ $this->valorAluguel/mês";
    }
}

$imovel = new Imovel();

$imovel->setEndereco("Rua das Flores, 123");
$imovel->setAreaM2(80);
$imovel->setValorAluguel(1500);

echo $imovel->exibir();

?>