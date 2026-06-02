<?php

class Veiculo {

    private $marca;
    private $modelo;
    private $ano;

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        if ($ano >= 1886) {
            $this->ano = $ano;
        } else {
            echo "Ano inválido!<br>";
        }
    }

    public function exibir() {
        return "Veículo: $this->marca $this->modelo | Ano: $this->ano";
    }
}

$veiculo = new Veiculo();

$veiculo->setMarca("Toyota");
$veiculo->setModelo("Corolla");
$veiculo->setAno(1500);
$veiculo->setAno(2022);

echo $veiculo->exibir();

?>