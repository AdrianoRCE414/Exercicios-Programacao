<?php

class Medico {

    private $nome;
    private $crm;
    private $especialidade;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCrm() {
        return $this->crm;
    }

    public function setCrm($crm) {
        if (!empty($crm)) {
            $this->crm = $crm;
        }
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        if (!empty($especialidade)) {
            $this->especialidade = $especialidade;
        }
    }

    public function exibir() {
        return "Dr(a). $this->nome | CRM: $this->crm | Especialidade: $this->especialidade";
    }
}

$medico = new Medico();

$medico->setNome("Ana Souza");
$medico->setCrm("12345-SP");
$medico->setEspecialidade("Cardiologia");

echo $medico->exibir();

?>