<?php
/* Smarty version 3.1.33, created on 2019-08-15 11:47:02
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54e3c65786d7_68908442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '043c2d6dd5a41ad030a3eaf8f78ffa87c1bfa6d6' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-btn.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54e3c65786d7_68908442 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="product-add-cart">
    
    <?php if ($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'] && ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0 || $_smarty_tpl->tpl_vars['product']->value['allow_oosp']) && !$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
        <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['add_to_cart_url'], ENT_QUOTES, 'UTF-8');?>
" method="post">

            <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
            <div class="input-group input-group-add-cart">
                <input
                        type="number"
                        name="qty"
                        value="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
}?>"
                        class="input-group form-control input-qty"
                        min="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');
}?>"
                >

                <button
                        class="btn btn-product-list add-to-cart"
                        data-button-action="add-to-cart"
                        type="submit"
                        <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
                            disabled
                        <?php }?>
                ><i class="fa fa-shopping-bag"
                    aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                </button>
            </div>

        </form>
    <?php } else { ?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
           class="btn btn-product-list"
        > <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </a>
    <?php }?>
</div><?php }
}
