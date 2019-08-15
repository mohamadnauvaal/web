<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:47:02
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/listing/product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54e3c61d1cd9_82087506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c3097c606b123ed66606ef9eb076363e96776e7' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/listing/product-list.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5d54e3c61d1cd9_82087506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12871333005d54e3c61a4446_65005239', 'head_seo_canonical');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16242248695d54e3c61bd221_93981369', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo_canonical'} */
class Block_12871333005d54e3c61a4446_65005239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo_canonical' => 
  array (
    0 => 'Block_12871333005d54e3c61a4446_65005239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (isset($_smarty_tpl->tpl_vars['listing']->value['pagination'])) {?>
        <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['should_be_displayed']) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['pagination']['pages'], 'p_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p_page']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['current']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['page'] == 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                            <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                    <?php } else { ?>
                        <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['type'] === 'previous') {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['clickable']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['p_page']->value['page'] == 1) {?>
                            <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                                <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php }?>
                        <?php } else { ?>
                            <link rel="prev" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p_page']->value['type'] === 'next') {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_page']->value['clickable']) {?>
                        <link rel="next" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_page']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                    <?php }?>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
                <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
        <?php }?>
    <?php }
}
}
/* {/block 'head_seo_canonical'} */
/* {block 'product_list_header'} */
class Block_18127427515d54e3c61bdd21_64440813 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <h1 class="h1 page-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span></h1>
        <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_active_filters'} */
class Block_21126673355d54e3c61c1096_53231885 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="">
                        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

                    </div>
                <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list_top'} */
class Block_516640205d54e3c61c3577_79104770 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_facets_center'} */
class Block_16234466235d54e3c61c61a0_36816457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="facets_search_center">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_facetedsearch"),$_smarty_tpl ) );?>

                        </div>
                    <?php
}
}
/* {/block 'product_list_facets_center'} */
/* {block 'product_list'} */
class Block_11460876255d54e3c61c8c64_40983106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="facets-loader-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_10219368925d54e3c61caf83_42882004 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
                    <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_bottom_static'} */
class Block_14804880845d54e3c61cd036_11322074 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_bottom_static'} */
/* {block 'product_list_not_found'} */
class Block_2489358435d54e3c61ceb37_28430310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="alert alert-warning" role="alert">
                        <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are no products.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</strong>
                    </div>
                <?php
}
}
/* {/block 'product_list_not_found'} */
/* {block 'content'} */
class Block_16242248695d54e3c61bd221_93981369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16242248695d54e3c61bd221_93981369',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_18127427515d54e3c61bdd21_64440813',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_21126673355d54e3c61c1096_53231885',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_516640205d54e3c61c3577_79104770',
  ),
  'product_list_facets_center' => 
  array (
    0 => 'Block_16234466235d54e3c61c61a0_36816457',
  ),
  'product_list' => 
  array (
    0 => 'Block_11460876255d54e3c61c8c64_40983106',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_10219368925d54e3c61caf83_42882004',
  ),
  'product_list_bottom_static' => 
  array (
    0 => 'Block_14804880845d54e3c61cd036_11322074',
  ),
  'product_list_not_found' => 
  array (
    0 => 'Block_2489358435d54e3c61ceb37_28430310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18127427515d54e3c61bdd21_64440813', 'product_list_header', $this->tplIndex);
?>

        <section id="products">
            <?php if (count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21126673355d54e3c61c1096_53231885', 'product_list_active_filters', $this->tplIndex);
?>

                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_516640205d54e3c61c3577_79104770', 'product_list_top', $this->tplIndex);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_faceted_position']) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16234466235d54e3c61c61a0_36816457', 'product_list_facets_center', $this->tplIndex);
?>

                <?php }?>
                <div id="">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11460876255d54e3c61c8c64_40983106', 'product_list', $this->tplIndex);
?>

                </div>
                <div id="infinity-loader-icon"><i class="fa fa-circle-o-notch fa-spin"></i></div>
                <div id="js-product-list-bottom">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10219368925d54e3c61caf83_42882004', 'product_list_bottom', $this->tplIndex);
?>



                </div>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14804880845d54e3c61cd036_11322074', 'product_list_bottom_static', $this->tplIndex);
?>

            <?php } else { ?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2489358435d54e3c61ceb37_28430310', 'product_list_not_found', $this->tplIndex);
?>


            <?php }?>
        </section>

    </section>
<?php
}
}
/* {/block 'content'} */
}
