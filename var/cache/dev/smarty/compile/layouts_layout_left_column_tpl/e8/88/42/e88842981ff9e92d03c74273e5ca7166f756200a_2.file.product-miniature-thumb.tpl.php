<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:11:15
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d8d31edff4_63406430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e88842981ff9e92d03c74273e5ca7166f756200a' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d8d31edff4_63406430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

    <div class="thumbnail-container">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
            <img
                    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_lazyload']) {?>
                        <?php if (isset($_smarty_tpl->tpl_vars['carousel']->value) && $_smarty_tpl->tpl_vars['carousel']->value) {?>
                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/blank.png"
                        <?php }?>
                    <?php } else { ?>
                        src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    <?php }?>
                    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                    data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                    width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                    height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                    class="img-fluid <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_lazyload']) {
if (isset($_smarty_tpl->tpl_vars['carousel']->value) && $_smarty_tpl->tpl_vars['carousel']->value) {?> <?php } else { ?>js-lazy-product-image<?php }
}?> product-thumbnail-first"
            >
            <?php if (!isset($_smarty_tpl->tpl_vars['overlay']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_rollover']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                        <?php if (!$_smarty_tpl->tpl_vars['image']->value['cover']) {?>
                            <img
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/blank.png"
                                data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                                height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                                alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
 2"
                                class="img-fluid js-lazy-product-image product-thumbnail-second"
                            >
                            <?php break 1;?>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php }?>
        </a>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5876284255d50d8d31cf3d9_49868953', 'product_flags');
?>


        <?php if (!isset($_smarty_tpl->tpl_vars['overlay']->value) && !isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1828432055d50d8d31dbaf6_67259167', 'product_list_functional_buttons');
?>

        <?php }?>

        <?php if (!isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20860319645d50d8d31e2197_60097750', 'product_availability');
?>

        <?php }?>

    </div>


<?php }
/* {block 'product_flags'} */
class Block_5876284255d50d8d31cf3d9_49868953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_5876284255d50d8d31cf3d9_49868953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="product-flags">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['flag']->value['type'] == 'discount') {?>
                            <span class="flag-discount-value"> /
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
                                -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'], ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                -<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_to_display'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                            </span>
                        <?php }?>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php
}
}
/* {/block 'product_flags'} */
/* {block 'quick_view'} */
class Block_8943604315d50d8d31dd8d2_75404341 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_list_functional_buttons'} */
class Block_1828432055d50d8d31dbaf6_67259167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_functional_buttons' => 
  array (
    0 => 'Block_1828432055d50d8d31dbaf6_67259167',
  ),
  'quick_view' => 
  array (
    0 => 'Block_8943604315d50d8d31dd8d2_75404341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8943604315d50d8d31dd8d2_75404341', 'quick_view', $this->tplIndex);
?>

                </div>
            </div>
        <?php
}
}
/* {/block 'product_list_functional_buttons'} */
/* {block 'product_availability'} */
class Block_20860319645d50d8d31e2197_60097750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_20860319645d50d8d31e2197_60097750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-availability">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['available_for_order'] && ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp'])) {?>
                <span class="badge product-available mt-2"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</span>
                    <?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']) && $_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'] > 0)) {?>
                    <span class="badge product-available"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product available with different options','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</span>
                    <?php } else { ?>
                    <span class="badge product-unavailable"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
            </div>
        <?php
}
}
/* {/block 'product_availability'} */
}
