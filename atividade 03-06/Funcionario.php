<?php

class Funcionario {

    private $nome;
    private $cargo;
    private $salario;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo "Salário inválido!<br>";
        }
    }

    public function exibir() {
        return "Funcionário: $this->nome | Cargo: $this->cargo | Salário: R$ $this->salario";
    }
}

$funcionario = new Funcionario();

$funcionario->setNome("Carlos");
$funcionario->setCargo("Analista");
$funcionario->setSalario(-1000);
$funcionario->setSalario(4500);

echo $funcionario->exibir();

?>