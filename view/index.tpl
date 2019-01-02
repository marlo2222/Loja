<!DOCTYPE html>
<html>

<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/tema/contatos/contatos.css">
    <script type="text/javascript" src="{$GET_TEMA}/tema/js/jquery.js"></script>
    <script type="text/javascript" src="{$GET_TEMA}/tema/js/bootstrap.js"></script>
    <script type="text/javascript" src="{$GET_TEMA}/tema/contatos/contatos.js"></script>
    <title>{$TITULO_SITE}</title>
    
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#">Top Ampla Opção</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="{$GET_HOME}"><i class="glyphicon glyphicon-home"></i>Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$PAG_PRODUTO}">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$PAG_MINHACONTA}">Minha Conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$PAG_CARRINHO}">Carrinho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$PAG_CONTATO}">Contato</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Social</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">WhatsApp</a>
                            <a class="dropdown-item" href="#">twitter</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control ml-4 mr-2" type="search" name="" placeholder="Digite para buscar">
                    <button class="btn btn-default" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h2 class="my-4 mt-lg-5">Categorias</h2>
                <div class="list-group">
                {foreach from=$CATEGORIAS item=c}
                    <a href="#" class="list-group-item">{$c.cat_nome}</a>
                    
                {/foreach}
                </div>

            </div>

            <div class="col-lg-9 mt-lg-5">
                <ul class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home">HOME</i></a></li>
                </ul>
                <div>
                {php}
                Rotas::get_Pagina(); 
                {/php}
                </div>
            </div>
        </div>
    </div>
    </div>
      <!-- /.rodape -->
    <footer class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-left text-white">{$TITULO_SITE}</p>
        <p class="m-0 text-left text-white">Copyright &copy; marlo2222</p>
      </div>
      <!-- /.container -->
    </footer>
</body>

</html>