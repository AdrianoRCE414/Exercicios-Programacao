<?php

class Atleta {

    private $nome;
    private $modalidade;
    private $melhorTempo;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getModalidade() {
        return $this->modalidade;
    }

    public function setModalidade($modalidade) {
        $this->modalidade = $modalidade;
    }

    public function getMelhorTempo() {
        return $this->melhorTempo;
    }

    public function setMelhorTempo($melhorTempo) {
        if ($melhorTempo > 0) {
            $this->melhorTempo = $melhorTempo;
        } else {
            echo "Tempo inválido!<br>";
        }
    }

    public function exibir() {
        return "Atleta: $this->nome | Modalidade: $this->modalidade | Melhor Tempo: {$this->melhorTempo}s";
    }
}

$atleta = new Atleta();

$atleta->setNome("Usain Bolt");
$atleta->setModalidade("100m rasos");
$atleta->setMelhorTempo(-1);
$atleta->setMelhorTempo(9.58);

echo $atleta->exibir();

?>