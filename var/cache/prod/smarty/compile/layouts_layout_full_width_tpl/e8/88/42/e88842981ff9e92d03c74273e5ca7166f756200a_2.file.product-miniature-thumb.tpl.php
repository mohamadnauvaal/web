<?php
/* Smarty version 3.1.33, created on 2019-08-14 13:57:09
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53b0c545a629_08896745',
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
function content_5d53b0c545a629_08896745 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8076873265d53b0c5441648_71570299', 'product_flags');
?>


        <?php if (!isset($_smarty_tpl->tpl_vars['overlay']->value) && !isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11313366825d53b0c544b4b7_48560747', 'product_list_functional_buttons');
?>

        <?php }?>

        <?php if (!isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3086723345d53b0c5450971_04592203', 'product_availability');
?>

        <?php }?>

    </div>


<?php }
/* {block 'product_flags'} */
class Block_8076873265d53b0c5441648_71570299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_8076873265d53b0c5441648_71570299',
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
class Block_15843701255d53b0c544cc80_24224242 extends Smarty_Internal_Block
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
class Block_11313366825d53b0c544b4b7_48560747 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_functional_buttons' => 
  array (
    0 => 'Block_11313366825d53b0c544b4b7_48560747',
  ),
  'quick_view' => 
  array (
    0 => 'Block_15843701255d53b0c544cc80_24224242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15843701255d53b0c544cc80_24224242', 'quick_view', $this->tplIndex);
?>

                </div>
            </div>
        <?php
}
}
/* {/block 'product_list_functional_buttons'} */
/* {block 'product_availability'} */
class Block_3086723345d53b0c5450971_04592203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_3086723345d53b0c5450971_04592203',
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
