<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:47:02
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54e3c64a97a6_29368008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852de0d8dd0014eace11a8b43058df3c5102a6e0' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/products.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/miniatures/product-list.tpl' => 1,
    'file:_partials/pagination.tpl' => 3,
  ),
),false)) {
function content_5d54e3c64a97a6_29368008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
    <div class="products row <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'grid') {?>products-grid<?php } else { ?>products-list<?php }?>">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3283315675d54e3c6498023_40229206', 'product_miniature');
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13707749405d54e3c649d148_68831617', 'pagination_bottom');
?>


</div>
<?php }
/* {block 'product_miniature'} */
class Block_3283315675d54e3c6498023_40229206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_3283315675d54e3c6498023_40229206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_default_view'] == 'grid') {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                <?php }?>
            <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination_bottom'} */
class Block_13707749405d54e3c649d148_68831617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_bottom' => 
  array (
    0 => 'Block_13707749405d54e3c649d148_68831617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_top_pagination'] && !$_smarty_tpl->tpl_vars['iqitTheme']->value['pl_infinity']) {?>
            <div class="pagination-wrapper pagination-wrapper-bottom">
            <div class="row align-items-center justify-content-between">
                <div class="col col-auto">
                     <span class="showing hidden-sm-down">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

                    </span>
                </div>
                <div class="col col-auto">
                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
                </div>
            </div>
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_infinity']) {?>
                <div class="hidden-xs-up"><?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, true);
?></div>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, true);
?>
            <?php }?>
        <?php }?>
    <?php
}
}
/* {/block 'pagination_bottom'} */
}
