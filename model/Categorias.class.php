<?php
    class Categorias extends Conexao{
        private $cat_id, $cat_nome, $cat_slug;
        function __construct(){
            parent::__construct();
        }

        function GetCategorias(){
            //query especifica para buscar os produtos de uma categoria especifica
            $query = "SELECT * FROM categorias";

            $this->ExecuteSQL($query);
            
            $this->GetLista();
        }
        private function GetLista(){
            $i = 1;
            while ($lista = $this->ListaDados()) {
                $this->itens[$i] = array(
                    'cat_id' => $lista['cat_id'],
                    'cat_nome' => $lista['cat_nome'],
                    'cat_slug' => $lista['cat_slug']
                );
                $i++;
            }
        }
        
    }
?>