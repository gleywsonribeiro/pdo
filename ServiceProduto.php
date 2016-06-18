<?php

class ServiceProduto {
    private $db;
    private $produto;
    
    public function __construct(IConexao $db, IProduct $produto) {
        $this->db = $db->connect();
        $this->produto = $produto;
    }

    public function listar() {
        $query = "select * from `produto`";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function salvar() {
        
    }
    
    public function alterar() {
        
    }
    
    public function deletar() {
        
    }
}

