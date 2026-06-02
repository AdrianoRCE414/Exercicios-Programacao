<?php

class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
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

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        if ($estoque >= 0) {
            $this->estoque = $estoque;
        } else {
            echo "Estoque inválido!<br>";
        }
    }

    public function exibir() {
        return "Produto: $this->nome | Preço: R$ $this->preco | Estoque: $this->estoque unidades";
    }
}

$produto = new Produto();

$produto->setNome("Mouse Gamer");
$produto->setPreco(-50);
$produto->setPreco(120);
$produto->setEstoque(-2);
$produto->setEstoque(10);

echo $produto->exibir();

?>