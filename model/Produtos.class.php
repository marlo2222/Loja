<?php
    Class Produtos extends Conexao{
        function __construct(){
            parent:: __construct();
        }
        function GetProdutos(){
            //query especifica para buscar os produtos de uma categoria especifica
            $query = "SELECT * FROM produtos p INNER JOIN categorias c ON 
            p.prod_categoria = c.cat_id";

            $query .= " ORDER BY prod_id DESC";
            $this->ExecuteSQL($query);
            $this->GetLista();
        } 

        function GetProdutosID($id){
            //query especifica para buscar os produtos de uma categoria especifica
            $query = "SELECT * FROM produtos p INNER JOIN categorias c ON 
            p.prod_categoria = c.cat_id";

        $query .= " AND prod_id = {$id}";

            $this->ExecuteSQL($query);

            $this->GetLista();
        } 

        private function GetLista(){
            $i = 1;
            while ($lista = $this->ListaDados()) {
                $this->itens[$i] = array(
                    'prod_id' => $lista['prod_id'],
                    'prod_nome' => $lista['prod_nome'],
                    'prod_desc' => $lista['prod_desc'],
                    'prod_peso' => $lista['prod_peso'],
                    'prod_valor' => $lista['prod_valor'],
                    'prod_largura' => $lista['prod_largura'],
                    'prod_altura' => $lista['prod_altura'],
                    'prod_comprimento' => $lista['prod_comprimento'],
                    'prod_img' => $lista['prod_img'],
                    'prod_slug' => $lista['prod_slug'],
                    'prod_estoque' => $lista['prod_estoque'],
                    'prod_modelo' => $lista['prod_modelo'],
                    'prod_referencia' => $lista['prod_referencia'],
                    'prod_fabricante' => $lista['prod_fabricante'],
                    'prod_ativo' => $lista['prod_ativo'],
                    'prod_frete_free' => $lista['prod_frete_free']
                );
                $i++;
            }
        }
    }
?>