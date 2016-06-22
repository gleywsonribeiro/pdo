<?php

interface IProduto {
    public function getId();
    public function getNome();
    public function getPreco();
    public function setId($id);
    public function setNome($nome);
    public function setPreco($preco);
}
