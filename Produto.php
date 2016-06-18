<?php


class Produto {
    private $id;
    private $nome;
    private $preco;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
        return $this;
    }


}
