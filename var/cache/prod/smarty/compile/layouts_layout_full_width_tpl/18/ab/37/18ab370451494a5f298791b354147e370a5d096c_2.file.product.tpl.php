<?php
/* Smarty version 3.1.33, created on 2019-08-14 13:57:09
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53b0c53f34f2_35621149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18ab370451494a5f298791b354147e370a5d096c' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_partials/product-miniature-1.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/product-miniature-2.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/product-miniature-3.tpl' => 1,
  ),
),false)) {
function content_5d53b0c53f34f2_35621149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10874201465d53b0c53e3242_95988977', 'product_miniature_item');
?>

<?php }
/* {block 'product_miniature_item'} */
class Block_10874201465d53b0c53e3242_95988977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_10874201465d53b0c53e3242_95988977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="js-product-miniature-wrapper <?php if (isset($_smarty_tpl->tpl_vars['carousel']->value) && $_smarty_tpl->tpl_vars['carousel']->value) {?>product-carousel<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['elementor']->value) && $_smarty_tpl->tpl_vars['elementor']->value) {?>
    col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbMobile']->value, ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbTablet']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>
    col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_p'], ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_t'], ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_d'], ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_ld'], ENT_QUOTES, 'UTF-8');
}?>
    <?php }?> ">
        <article
                class="product-miniature product-miniature-default product-miniature-grid product-miniature-layout-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'], ENT_QUOTES, 'UTF-8');?>
 js-product-miniature"
                data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
                data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
                itemscope itemtype="http://schema.org/Product"

        >

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'] == 1) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'] == 2) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_grid_layout'] == 3) {?>
                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        </article>
    </div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
