<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:06:40
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54da50732de8_35780594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8a421f1e0a39325157a6434f05ce0b7b649da4e' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54da50732de8_35780594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart pt-3">
    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2008330425d54da50726ce7_92355046', 'product_quantity');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12554260285d54da5072e5e7_92197662', 'product_minimal_quantity');
?>

    <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
class Block_2008330425d54da50726ce7_92355046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_2008330425d54da50726ce7_92355046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="row extra-small-gutters product-quantity">
                <div class="col col-12 col-sm-auto">
                    <div class="qty">
                        <input
                                type="number"
                                name="qty"
                                id="quantity_wanted"
                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
                                class="input-group"
                                min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
                        >
                    </div>
                </div>
                <div class="col col-12 col-sm-auto">
                    <div class="add">
                        <button
                                class="btn btn-primary btn-lg add-to-cart"
                                data-button-action="add-to-cart"
                                type="submit"
                                <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                                    disabled
                                <?php }?>
                        >
                            <i class="fa fa-shopping-bag fa-fw bag-icon" aria-hidden="true"></i>
                            <i class="fa fa-circle-o-notch fa-spin fa-fw spinner-icon" aria-hidden="true"></i>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                        </button>

                    </div>
                </div>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductAddCartBtn','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

            </div>
        <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_minimal_quantity'} */
class Block_12554260285d54da5072e5e7_92197662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_12554260285d54da5072e5e7_92197662',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p class="product-minimal-quantity">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

                <?php }?>
            </p>
        <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
