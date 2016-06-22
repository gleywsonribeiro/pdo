<?php

class ServiceProduto {
    private $db;
    private $produto;
    
    public function __construct(IConexao $db, IProduto $produto) {
        $this->db = $db->connect();
        $this->produto = $produto;
    }

    public function listar() {
        $query = "select * from `produto`";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function find($id) {
        $query = "select * from `produto` where `id`=:id";
        $statement = $this->db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }


    public function salvar() {
        $query = "insert into `produto`(`nome`,`preco`) values(:nome, :preco)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->produto->getNome());
        $stmt->bindValue(":preco", $this->produto->getPreco());
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    
    public function alterar() {
        $query = "update `produto` set `nome`=?, `preco`=? where `id`=?";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(1, $this->produto->getNome());
        $stmt->bindValue(2, $this->produto->getPreco());
        $stmt->bindValue(3, $this->produto->getId());
        $status = $stmt->execute();
        return $status;
    }
    
    public function deletar(int $id) {
        $query = "delete `produto` where `id`=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $status = $stmt->execute();
        return $status;
    }
}

