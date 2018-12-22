<h2>Pagina produtos</h2>
<hr>
   <section id="paginacao" class="row">
        <center>
            PAGINAS
        </center>
    </section>
    
    <section id="produtos" class="row">
        <ul >
            <div class="col-lg-10 card-group">
            {foreach from =$PRO item=P}
              <li class="card">
                <a href="{$PRO_INFO}/{$P.prod_id}/{$P.prod_slug}">
                    <img class="card-img-top" src="media/img/{$P.prod_img}" alt="">
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{$P.prod_nome}</a>
                  </h4>
                  <h5>{$P.prod_valor}</h5>
                  <p class="card-text">{$P.prod_desc}</p>
                </div>
              </li>
            {/foreach}
            </div>
        </ul>
        
    </section>
    <!-- paginação inferior-->
    <section id="paginacao" class="row">
        <center>
            PAGINAS
        </center>
    </section>