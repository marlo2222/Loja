<?php
/* Smarty version 3.1.33, created on 2018-12-22 04:10:43
  from 'C:\wamp64\www\Loja\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1db943c0d3e1_41081078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ebe4347dc4f32eab0a7650c560aa6ac42aff883' => 
    array (
      0 => 'C:\\wamp64\\www\\Loja\\view\\produtos.tpl',
      1 => 1545451842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1db943c0d3e1_41081078 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Pagina produtos</h2>
<hr>
   <section id="paginacao" class="row">
        <center>
            PAGINAS
        </center>
    </section>
    
    <section id="produtos" class="row">
        <ul >
            <div class="col-lg-10 card-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
              <li class="card">
                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_slug'];?>
">
                    <img class="card-img-top" src="media/img/<?php echo $_smarty_tpl->tpl_vars['P']->value['prod_img'];?>
" alt="">
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_nome'];?>
</a>
                  </h4>
                  <h5><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_valor'];?>
</h5>
                  <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['prod_desc'];?>
</p>
                </div>
              </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </ul>
        
    </section>
    <!-- paginação inferior-->
    <section id="paginacao" class="row">
        <center>
            PAGINAS
        </center>
    </section><?php }
}
