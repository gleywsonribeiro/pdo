<?php

class ServiceProduto {
    private $db;
    private $produto;
    
    public function __construct(IConexao $db, IProduct $produto) {
        $this->db = $db->conect();
        $this->produto = $produto;
    }

    public function listar() {
        
    }
    
    public function salvar() {
        
    }
    
    public function alterar() {
        
    }
    
    public function deletar() {
        
    }
}

