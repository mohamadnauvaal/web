<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:40
  from '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/front/delivery_methods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d928b3b499_39448357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0770ce8189d9d7bc41cc6b7e64bec29fbc9d08b4' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/front/delivery_methods.tpl',
      1 => 1550240200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d928b3b499_39448357 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="velsof_sc_overlay"></div>
<?php if (isset($_smarty_tpl->tpl_vars['is_virtual_cart']->value) && $_smarty_tpl->tpl_vars['is_virtual_cart']->value) {?>
    <input id="input_virtual_carrier" class="hidden" type="hidden" name="id_carrier" value="0" />
    <div class="supercheckout-checkout-content" style="display:block">
        <div class="not-required-msg" style="display: block;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Delivery Method Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
    </div>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['shipping_errors']->value) && is_array($_smarty_tpl->tpl_vars['shipping_errors']->value)) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_errors']->value, 'shippig_error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shippig_error']->value) {
?>
            <div class="supercheckout-checkout-content" style="display:block">
                <div class="permanent-warning" style="display: block;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shippig_error']->value, ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } else { ?>
        <div class="supercheckout-checkout-content" style="display:block"></div>
        <div id="hook-display-before-carrier">
            <?php echo $_smarty_tpl->tpl_vars['hookDisplayBeforeCarrier']->value;?>
        </div>
        <?php if (count($_smarty_tpl->tpl_vars['delivery_options']->value)) {?>
            <table class="radio">
                <?php $_smarty_tpl->_assignInScope('selected', 0);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['delivery_options']->value, 'carrier', false, 'carrier_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['carrier_id']->value => $_smarty_tpl->tpl_vars['carrier']->value) {
?>
                    <tr class="highlight">
                        <td>
                            <?php if (!empty($_smarty_tpl->tpl_vars['delivery_option']->value) && $_smarty_tpl->tpl_vars['delivery_option']->value == $_smarty_tpl->tpl_vars['carrier_id']->value && $_smarty_tpl->tpl_vars['selected']->value == 0) {?>
                                <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->tpl_vars['carrier_id']->value;?>
" id="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" />
                                <?php $_smarty_tpl->_assignInScope('selected', 1);?>
                            <?php } elseif (isset($_smarty_tpl->tpl_vars['default_shipping_method']->value) && $_smarty_tpl->tpl_vars['carrier']->value['id'] == $_smarty_tpl->tpl_vars['default_shipping_method']->value && $_smarty_tpl->tpl_vars['selected']->value == 0) {?>
                                <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->tpl_vars['carrier_id']->value;?>
" id="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
" checked="checked" />
                            <?php } else { ?>
                                <input class='supercheckout_shipping_option delivery_option_radio' type="radio" name="delivery_option[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo $_smarty_tpl->tpl_vars['carrier_id']->value;?>
" id="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
" />
                            <?php }?>
                        </td>
                        <td class="shipping_info">
                            <label for="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
">
                                <?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value != 0) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['carrier']->value['logo'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['logo_width']) && $_smarty_tpl->tpl_vars['carrier']->value['logo_width'] != '' && $_smarty_tpl->tpl_vars['carrier']->value['logo_width'] != 'auto') {?>width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo_width'], ENT_QUOTES, 'UTF-8');?>
"<?php } else { ?>width='50'<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['carrier']->value['logo_height']) && $_smarty_tpl->tpl_vars['carrier']->value['logo_height'] != '' && $_smarty_tpl->tpl_vars['carrier']->value['logo_height'] != "auto") {?>height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo_height'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>/><?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value != 2) {?><br><?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['display_carrier_style']->value != 2) {?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
                                                       
                                <?php }?>
                            </label>
                            <span class="supercheckout-shipping-small-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </td>
                        <td class="">
                            <label for="shipping_method_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address']->value), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['carrier']->value['id']), ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo $_smarty_tpl->tpl_vars['carrier']->value['price'];?>
                            </label>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
        <?php } else { ?>
            <div class="supercheckout-checkout-content" style="display:block">
                <div class="permanent-warning" style="display: block;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Delivery Method Available','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
            </div>
        <?php }?>
        <div id="hook-display-after-carrier">
            <?php echo $_smarty_tpl->tpl_vars['hookDisplayAfterCarrier']->value;?>
        </div>
    <?php }
}
}
}
