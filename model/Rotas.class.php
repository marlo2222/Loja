<?php

Class Rotas{
    public static $pag;

    static function get_Pagina(){
        if (isset($_GET['pag'])) {

            $pagina = $_GET['pag'];
            self::$pag = explode('/', $pagina);
            echo '<pre>';
            var_dump(self::$pag);
            echo '<pre>';
            $pagina = 'controller/' .self::$pag[0] . '.php';
            
            if (file_exists($pagina)) {
                include $pagina;
            }else{
                include 'erro.php';
            }
        }
    }
}

?>