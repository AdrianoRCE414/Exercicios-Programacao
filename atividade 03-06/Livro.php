<?php

class Livro {

    private $titulo;
    private $autor;
    private $preco;

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        if (!empty($titulo)) {
            $this->titulo = $titulo;
        } else {
            echo "Título inválido!<br>";
        }
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        if (!empty($autor)) {
            $this->autor = $autor;
        } else {
            echo "Autor inválido!<br>";
        }
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        if ($preco > 0) {
            $this->preco = $preco;
        } else {
            echo "Preço inválido!<br>";
        }
    }

    public function exibir() {
        return "Livro: $this->titulo | Autor: $this->autor | Preço: R$ $this->preco";
    }
}

$livro = new Livro();

$livro->setTitulo("Dom Casmurro");
$livro->setAutor("Machado de Assis");
$livro->setPreco(-10);
$livro->setPreco(49.90);

echo $livro->exibir();

?>