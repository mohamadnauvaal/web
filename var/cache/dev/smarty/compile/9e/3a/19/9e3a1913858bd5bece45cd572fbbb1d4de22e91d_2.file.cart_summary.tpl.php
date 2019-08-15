<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:42
  from '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/front/cart_summary.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d92a571e17_92795172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e3a1913858bd5bece45cd572fbbb1d4de22e91d' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/front/cart_summary.tpl',
      1 => 1550240200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d92a571e17_92795172 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var subtotal_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subtotal','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var shipping_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
    var taxex_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Taxes','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
    <div class="velsof_sc_overlay"></div>
    <table class="supercheckout-summary">
        <thead>
            <tr>                                
                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-model"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Model','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                                <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-qty" style="text-align:center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                <?php }?>
                                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-qty" style="text-align:center;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                <th style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</th>
                <th class="supercheckout-qty"></th>
            </tr>
        </thead>
        <tbody>
            <?php $_smarty_tpl->_assignInScope('image_display', 0);?>
            <?php $_smarty_tpl->_assignInScope('odd', 0);?>
            <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', false);?>

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['is_virtual'] == 0) {?>
                    <?php $_smarty_tpl->_assignInScope('have_non_virtual_products', true);?>
                <?php }?>
                <?php $_smarty_tpl->_assignInScope('productId', $_smarty_tpl->tpl_vars['product']->value['id_product']);?>
                <?php $_smarty_tpl->_assignInScope('product_url', $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category'],null,null,$_smarty_tpl->tpl_vars['product']->value['id_shop'],$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']));?>
                <?php $_smarty_tpl->_assignInScope('productAttributeId', $_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
                <?php $_smarty_tpl->_assignInScope('odd', ($_smarty_tpl->tpl_vars['odd']->value+1)%2);?>

                <tr id="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
">
                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-name">
                        <div>
                            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                <?php $_smarty_tpl->_assignInScope('image_display', $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['logged']['display']);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('image_display', $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_image']['guest']['display']);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['image_display']->value == 1) {?>
                                <img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8');?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8');?>
' src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
" alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
' />
                                <br>
                                <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            <?php } else { ?>
                                <a data-toggle="popover" data-title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" data-content="<img width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['width'], ENT_QUOTES, 'UTF-8');?>
' height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['cart_image_size']['height'], ENT_QUOTES, 'UTF-8');?>
' src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
' />" data-placement="right" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                            <?php }?>
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes']) && count($_smarty_tpl->tpl_vars['product']->value['attributes']) > 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <small><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</a></small>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <?php if (count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                                        <small>
                                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
:
                                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                                <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>
                                                <?php } else { ?>
                                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                                            <?php }?>    
                                        </small>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </div>
                    </td>
                    <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-model">
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['reference']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');
}?>
                </td>
                                <?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value) {?>
                <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_availability']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-model">
                   
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0) {?>
                         <span class="kblabel<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0 && isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) && !$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0) {?> label-warning<?php } else { ?> label-success<?php }?>">
                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) && $_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later']) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_later'], ENT_QUOTES, 'UTF-8');?>

                            <?php } else { ?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                            <?php }?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                        <?php }?>
                         </span>
                    <?php } else { ?>
                        
                    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now']) && $_smarty_tpl->tpl_vars['product']->value['available_now']) {?>
                        <span class="kblabel label-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                    <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['stock_quantity'] < $_smarty_tpl->tpl_vars['product']->value['quantity']) {?>
                        <span class="kblabel label-danger"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Out of stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                    <?php } else { ?>
                        <span class="kblabel label-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In Stock','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                    <?php }?>
                </td>
                <?php }?>
                
                <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-qty supercheckout-product-qty-input" >

                    <input type="hidden" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" name="quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
_hidden" />
                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['qty_update_option']) && $_smarty_tpl->tpl_vars['settings']->value['qty_update_option'] == 0) {?>
                        <div><button type="button" class="cart_quantity_down qty-btn increase_button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Increase Quantity','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" onclick="upQty('quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
')"><span class="plus-span"><img src="<?php echo $_smarty_tpl->tpl_vars['module_image_path']->value;?>
up.png" alt="+"></span></button></div>
                        <div><input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" ></div>

                        <div><button type="button" class="cart_quantity_down qty-btn decrease_button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Decrease Quantity','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" onclick="downQty('quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
')" ><span class="minus-span"><img src="<?php echo $_smarty_tpl->tpl_vars['module_image_path']->value;?>
down.png" alt="-"></span></button></div>
                    <?php } else { ?>
                        <input size="2" class="quantitybox" autocomplete="off" type="text" name="quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['quantity']), ENT_QUOTES, 'UTF-8');?>
" ><br>
                        <a href="javascript:void(0)" id="demo_2_s" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'update quantity','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" onclick="updateQtyByBtn('quantity_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
')" ><small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</small></a>
                            <?php }?>
                </td>
                <td style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-unit-total">
                    <span class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                        <div class="unit-price-cart"><?php echo $_smarty_tpl->tpl_vars['product']->value['unit_price_full'];?>
</div>
                    <?php }?>
                </td>
                <td id="total_product_price_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;" class="supercheckout-total">
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
                </td>
                <td class="supercheckout-qty" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['logged']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_name']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_model']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_qty']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_price']['guest']['display'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['cart_options']['product_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                    <a href="javascript://" id="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_customization']), ENT_QUOTES, 'UTF-8');?>
" onclick="deleteProductFromCart(this.id);" class="removeProduct supercheckout-product-delete"><div  title="Delete"></div></a>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<table class="supercheckout-totals">
    
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subtotals']->value, 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
            
            <?php if (isset($_smarty_tpl->tpl_vars['subtotal']->value['value']) && $_smarty_tpl->tpl_vars['subtotal']->value['value']) {?>
                <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'products') {?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['product_sub_total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['product_sub_total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                <?php } elseif ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'shipping') {?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['shipping_price']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['shipping_price']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                <?php } elseif ($_smarty_tpl->tpl_vars['subtotal']->value['type'] == 'tax') {?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total_tax']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total_tax']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                <?php } else { ?>
                    <tr id="supercehckout_summary_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                    <td class="title"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['subtotal']->value['label'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></td>
                    <td class="value"><span id="supercehckout_total_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
_value" class="price"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value['value'];?>
</span></td>
                </tr>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['vouchers']->value['allowed']) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vouchers']->value['added'], 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
                <tr id="cart_discount_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['id_cart_rule'], ENT_QUOTES, 'UTF-8');?>
" class="cart_discount" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                    <td class="title"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
<a href="javascript:void(0)" onclick="removeDiscount('<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['voucher']->value['id_cart_rule']), ENT_QUOTES, 'UTF-8');?>
')"><div title="Redeem" class="removeProduct"></div></a></td></b></td>
                    <td class="value"><span class="price"><?php echo $_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'];?>
</span> </td>                                
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr id="supercheckout_voucher_input_row" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['voucher']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
                <td class="title"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Voucher','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></td>
                <td class="value" id="voucher-form">
                    <input  id="discount_name" name="discount_name" type="text" class="voucherText" value="">
                    <input type="hidden" value="1" name="submitDiscount">
                    <input id="button-coupon" type="button" onClick="callCoupon();" class="orangebuttonapply" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply','mod'=>'supercheckout'),$_smarty_tpl ) );?>
">
                </td>
            </tr>
        <?php } else { ?>
            <tr id="supercheckout_voucher_input_row" style="display:none;"></tr>
        <?php }?>
        <tr style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total']['logged']['display'] == 1) {
} else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['order_total_option']['total']['guest']['display'] == 1) {
} else { ?>none<?php }
}?>;">
            <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 1) {?>
            <td class="title"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></td>
            <td class="value"><span id="total_price" class="price"><?php echo $_smarty_tpl->tpl_vars['totals']->value['total']['value'];?>
</span>
            <input type="hidden" id="total_price_wfee" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
"></td>
            <?php } else { ?>
            <td class="title"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></td>
            <td class="value"><span id="total_price" class="price"><?php echo $_smarty_tpl->tpl_vars['totals']->value['total']['value'];?>
</span>
            <input type="hidden" id="total_price_wfee" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
"></td>
            <?php }?>
        </tr>
    </tbody>
</table>
<div id="highlighted_cart_rules">
    <?php if (count($_smarty_tpl->tpl_vars['other_available_vouchers']->value) > 0) {?>
        <p id="title" class="title-offers" style="font-weight: 600;color: black!important;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:</p>
        <div id="display_cart_vouchers">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['other_available_vouchers']->value, 'voucher');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['voucher']->value['code'] != '') {?><span onclick="$('#discount_name').val('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8');?>
');
                        return false;" class="voucher_name" data-code="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
<br />
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
</div>
        
<!-- INSERT INTO #CART BLOCK -->
<!-- Start - Code to insert custom fields in cart block -->
<div class="div_custom_fields">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['position'] == 'cart_block') {?>
    <div class="supercheckout-blocks">
            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "textbox") {?>
                <div class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></div>
                <input type="text" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
" class="supercheckout-large-field width_100">
                <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "textarea") {?>
                <div class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></div>
                <textarea name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" class="supercheckout-large-field width_100" style="width: 100%; height: 100px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "selectbox") {?>
                <div class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></div>
                <select name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" class="supercheckout-large-field width_100">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'field_options');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_options']->value) {
?>
                    <option <?php if ($_smarty_tpl->tpl_vars['field_options']->value['default_value'] == $_smarty_tpl->tpl_vars['field_options']->value['option_value']) {?>selected<?php }?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_value'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_label'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "radio") {?>
                <div class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></div>
                <?php $_smarty_tpl->_assignInScope('radio_counter', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'field_options');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_options']->value) {
?>
                    <div class="supercheckout-extra-wrap">
                        <p>
                            <div class="radio" id="uniform-field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
"><span>
                                    <input type="radio" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_value'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['field_options']->value['default_value'] == $_smarty_tpl->tpl_vars['field_options']->value['option_value']) {?>checked<?php }?>>
                                </span></div>
                            <label for="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_label'], ENT_QUOTES, 'UTF-8');?>
</label>
                        </p>
                    </div>
                <?php $_smarty_tpl->_assignInScope('radio_counter', $_smarty_tpl->tpl_vars['radio_counter']->value+1);?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == "checkbox") {?>
            <div class="cursor_help" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_help_text'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['field_label'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value['required'] == "1") {?><span style="display:inline;" class="supercheckout-required">*</span><?php }?></div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options'], 'field_options');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field_options']->value) {
?>
                <div class="input-box input-field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
">
                    <div class="checker" id="uniform-field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
">
                        <span class="checked">
                            <input <?php if ($_smarty_tpl->tpl_vars['field_options']->value['default_value'] == $_smarty_tpl->tpl_vars['field_options']->value['option_value']) {?>checked<?php }?> type="checkbox" name="custom_fields[field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_value'], ENT_QUOTES, 'UTF-8');?>
">
                        </span>
                    </div>
                    <label for="field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field_options']->value['option_label'], ENT_QUOTES, 'UTF-8');?>
</b></label>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <span id="error_field_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['id_velsof_supercheckout_custom_fields'], ENT_QUOTES, 'UTF-8');?>
" class="errorsmall_custom hidden_custom"></span>
        <?php }?>
        </div>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<!-- End - Code to insert custom fields in registration form block -->
                
<?php }
}
