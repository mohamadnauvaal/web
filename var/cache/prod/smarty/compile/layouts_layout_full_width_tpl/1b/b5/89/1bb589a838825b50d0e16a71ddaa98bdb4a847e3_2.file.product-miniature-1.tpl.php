<?php
/* Smarty version 3.1.33, created on 2019-08-14 13:57:09
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53b0c5421aa4_89870106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1bb589a838825b50d0e16a71ddaa98bdb4a847e3' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-1.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
    'file:catalog/_partials/miniatures/_partials/product-miniature-btn.tpl' => 1,
  ),
),false)) {
function content_5d53b0c5421aa4_89870106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13732412105d53b0c53f7254_84150098', 'product_thumbnail');
?>


<div class="product-description">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14841807635d53b0c53f8cb4_72448866', 'product_category_name');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5834378985d53b0c53fbce6_11703845', 'product_name');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14461985485d53b0c53ff380_65913827', 'product_brand');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11626868545d53b0c5403240_74477743', 'product_reference');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18542301105d53b0c54060b8_19046979', 'product_reviews');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18184900475d53b0c5407d43_88496754', 'product_price_and_shipping');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16695637915d53b0c5415ce4_42139177', 'product_variants');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10620565985d53b0c541a1d6_05949290', 'product_description_short');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16968580915d53b0c541e220_91904507', 'product_add_cart');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19020061145d53b0c541fb92_76147154', 'product_add_cart_below');
?>


</div>
<?php }
/* {block 'product_thumbnail'} */
class Block_13732412105d53b0c53f7254_84150098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_13732412105d53b0c53f7254_84150098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_category_name'} */
class Block_14841807635d53b0c53f8cb4_72448866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_category_name' => 
  array (
    0 => 'Block_14841807635d53b0c53f8cb4_72448866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['category_name'] != '') {?>
            <div class="product-category-name text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php
}
}
/* {/block 'product_category_name'} */
/* {block 'product_name'} */
class Block_5834378985d53b0c53fbce6_11703845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_5834378985d53b0c53fbce6_11703845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h3 class="h3 product-title" itemprop="name">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],50,'...' )), ENT_QUOTES, 'UTF-8');?>
</a>
        </h3>
    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_brand'} */
class Block_14461985485d53b0c53ff380_65913827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_brand' => 
  array (
    0 => 'Block_14461985485d53b0c53ff380_65913827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['manufacturer_name']) && $_smarty_tpl->tpl_vars['product']->value['manufacturer_name'] != '') {?>
            <div class="product-brand text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['manufacturer_name'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php
}
}
/* {/block 'product_brand'} */
/* {block 'product_reference'} */
class Block_11626868545d53b0c5403240_74477743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_11626868545d53b0c5403240_74477743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] != '') {?>
            <div class="product-reference text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?>
    <?php
}
}
/* {/block 'product_reference'} */
/* {block 'product_reviews'} */
class Block_18542301105d53b0c54060b8_19046979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reviews' => 
  array (
    0 => 'Block_18542301105d53b0c54060b8_19046979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_18184900475d53b0c5407d43_88496754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_18184900475d53b0c5407d43_88496754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
            <div class="product-price-and-shipping"
                 itemprop="offers"
                 itemscope
                 itemtype="https://schema.org/Offer">
                <?php if (isset($_smarty_tpl->tpl_vars['currency']->value['iso_code'])) {?><meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                <span itemprop="price" class="product-price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                    <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCountDown'),$_smarty_tpl ) );?>

                <?php }?>
            </div>
        <?php }?>
    <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_variants'} */
class Block_16695637915d53b0c5415ce4_42139177 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_variants' => 
  array (
    0 => 'Block_16695637915d53b0c5415ce4_42139177',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
            <div class="products-variants">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                <?php }?>
            </div>
        <?php }?>
    <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_description_short'} */
class Block_10620565985d53b0c541a1d6_05949290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_10620565985d53b0c541a1d6_05949290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="product-description-short text-muted">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...' )), ENT_QUOTES, 'UTF-8');?>

        </div>
    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_add_cart'} */
class Block_16968580915d53b0c541e220_91904507 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_add_cart' => 
  array (
    0 => 'Block_16968580915d53b0c541e220_91904507',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/_partials/product-miniature-btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_add_cart'} */
/* {block 'product_add_cart_below'} */
class Block_19020061145d53b0c541fb92_76147154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_add_cart_below' => 
  array (
    0 => 'Block_19020061145d53b0c541fb92_76147154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListBelowButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'product_add_cart_below'} */
}
