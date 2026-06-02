<?php

class Aluno {

    private $nome;
    private $matricula;
    private $nota;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        if (!empty($nome)) {
            $this->nome = $nome;
        }
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        if (!empty($matricula)) {
            $this->matricula = $matricula;
        }
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            echo "Nota inválida!<br>";
        }
    }

    public function exibir() {
        return "Aluno: $this->nome | Matrícula: $this->matricula | Nota: $this->nota";
    }
}

$aluno = new Aluno();

$aluno->setNome("Pedro Silva");
$aluno->setMatricula("2025001");
$aluno->setNota(15);
$aluno->setNota(8.5);

echo $aluno->exibir();

?>