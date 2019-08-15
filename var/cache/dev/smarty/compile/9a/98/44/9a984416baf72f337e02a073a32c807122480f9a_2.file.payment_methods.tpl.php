<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:43
  from '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/front/payment_methods.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d92bc2cc74_29066586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a984416baf72f337e02a073a32c807122480f9a' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/front/payment_methods.tpl',
      1 => 1550240202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d92bc2cc74_29066586 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="velsof_sc_overlay"></div>
<?php if (isset($_smarty_tpl->tpl_vars['payment_method_not_required']->value)) {?>
    <div class='supercheckout-checkout-content' style='display:block'>
        <div class='permanent-warning not-required-msg'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No payment method required.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
    </div>
<?php } elseif (count($_smarty_tpl->tpl_vars['payment_methods']->value) == 0) {?>
    <div class='supercheckout-checkout-content' style='display:block'>
        <div class='permanent-warning not-required-msg'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No payment method is available.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
    </div>
<?php } else { ?>
    <table class="radio">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
            <tr class="highlight">
                <td>
                    <input type="radio" name="payment_method" data-module-name="<?php echo $_smarty_tpl->tpl_vars['option']->value['module_name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['id_module'] == $_smarty_tpl->tpl_vars['selected_payment_method']->value) {?>checked="checked"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['option']->value['binary']) {?>binary<?php }?>"/>
                </td>
                <td>
                    <label id="payment_lbl_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['option']->value['id_module']), ENT_QUOTES, 'UTF-8');?>
" for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value != 0) {?>
                            <?php if ($_smarty_tpl->tpl_vars['option']->value['payment_image_url'] != '') {?>
                                <img src='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['payment_image_url'], ENT_QUOTES, 'UTF-8');?>
' alt='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['call_to_action_text'], ENT_QUOTES, 'UTF-8');?>
' <?php if (isset($_smarty_tpl->tpl_vars['option']->value['width']) && $_smarty_tpl->tpl_vars['option']->value['width'] != '' && $_smarty_tpl->tpl_vars['option']->value['width'] != "auto") {?>width='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['width'], ENT_QUOTES, 'UTF-8');?>
'<?php } else { ?> width="50"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['option']->value['height']) && $_smarty_tpl->tpl_vars['option']->value['height'] != '' && $_smarty_tpl->tpl_vars['option']->value['height'] != "auto") {?>height='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['height'], ENT_QUOTES, 'UTF-8');?>
'<?php }?>/><?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value != 2) {?><br><?php }?>
                            <?php }?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['display_payment_style']->value != 2) {?>
                            <span id='payment_method_name_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['option']->value['id_module']), ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['call_to_action_text'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php }?>
                    </label>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
        
    <div id="payment_methods_additional_container">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_methods']->value, 'option');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
?>
            <div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['id'], ENT_QUOTES, 'UTF-8');?>
_info_container payment-additional-info" style="display:none;">
                <div class="supercheckout-blocks js-additional-information definition-list additional-information">
                    <?php echo $_smarty_tpl->tpl_vars['option']->value['additionalInformation'];?>
                </div>
                <div id="pay-with-form">
                    <?php if ($_smarty_tpl->tpl_vars['option']->value['form']) {?>
                        <?php echo $_smarty_tpl->tpl_vars['option']->value['form'];?>
                    <?php } else { ?>
                        <form id="payment-form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['option']->value['action'];?>
">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['inputs'], 'input');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
?>
                            <input type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['type'], ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['value'], ENT_QUOTES, 'UTF-8');?>
">
                          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                          <button style="display:none" id="pay-with-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['id'], ENT_QUOTES, 'UTF-8');?>
" type="submit"></button>
                        </form>
                    <?php }?>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div id="payment_methods_binaries" style="display:none;">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentByBinaries'),$_smarty_tpl ) );?>

    </div>
<?php }
}
}
