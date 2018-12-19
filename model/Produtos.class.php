<?php
    Class Produtos extends Conexao{
        function __construct(){
            parent:: __construct();
        }
        function GetProdutos(){
            //query especifica para buscar os produtos de uma categoria especifica
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON 
        p.prod_categoria = c.cat_id";
        } 
    }
?>