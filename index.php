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
        require_once './IProduct.php';
        require_once './Produto.php';
        require_once './ServiceProduto.php';
        
        $conexao = new Conexao("localhost", "pdo", "root", "");
        
        ?>
    </body>
</html>
