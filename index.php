<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './IConexao.php';
        require_once './Conexao.php';
        require_once './IProduto.php';
        require_once './Produto.php';
        require_once './ServiceProduto.php';
        
        $conexao = new Conexao("localhost", "pdo", "root", "systemcall");
        $produto = new Produto();
        $produto->setNome("Livro")
                ->setPreco(400);
        
        $produto->setId(1)
                ->setNome("Smartphone Moto X")
                ->setPreco(1250);
        
        $service = new ServiceProduto($conexao, $produto);
        
        //print_r($service->alterar());
        
        print_r($service->find(1));
        ?>
    </body>
</html>
