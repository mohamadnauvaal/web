<?php
/* Smarty version 3.1.33, created on 2019-08-15 10:57:21
  from 'module:supercheckoutviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54d82115b951_69001145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8394e692aceb03f2bb93595bd33db74ebd5bbe20' => 
    array (
      0 => 'module:supercheckoutviewstemplat',
      1 => 1550240202,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:supercheckout/views/templates/front/login.tpl' => 1,
    'module:supercheckout/views/templates/front/shipping_address.tpl' => 1,
    'module:supercheckout/views/templates/front/payment_address.tpl' => 1,
    'module:supercheckout/views/templates/front/order_extra_fields.tpl' => 1,
  ),
),false)) {
function content_5d54d82115b951_69001145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19771183635d54d82101ccd0_00778014', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'checkout/checkout.tpl');
}
/* {block 'content'} */
class Block_19771183635d54d82101ccd0_00778014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19771183635d54d82101ccd0_00778014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SuperCheckout','mod'=>'supercheckout'),$_smarty_tpl ) );?>

    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php if (!isset($_smarty_tpl->tpl_vars['empty']->value)) {?>

    <?php echo '<script'; ?>
>
        <?php if ((isset($_smarty_tpl->tpl_vars['mobileLoginActive']->value) && ($_smarty_tpl->tpl_vars['mobileLoginActive']->value == 1))) {?>
            var kbmobile_front_url = '<?php echo $_smarty_tpl->tpl_vars['kbmobile_front_url']->value;?>
';            var login_by_mobile = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_mobile'], ENT_QUOTES, 'UTF-8');?>
";
            var login_by_otp = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_otp'], ENT_QUOTES, 'UTF-8');?>
";
            var kb_input_error_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Kindly input valid values in all required fields','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        <?php }?>
        var cartRefreshURL = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cartRefreshURL']->value, ENT_QUOTES, 'UTF-8');?>
';
        var supercheckoutLayout = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['layout']), ENT_QUOTES, 'UTF-8');?>
;
        var supercheckout_image_path = "<?php echo $_smarty_tpl->tpl_vars['module_image_path']->value;?>
";         var empty_cart_warning = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your cart is empty','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var google_auto_fill_warning = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is some issue with Google Auto Address feature. Please contact support.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var notification_title = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Notification','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var warning = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['warning']->value, ENT_QUOTES, 'UTF-8');?>
";
        var product_remove_success = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_remove_success']->value, ENT_QUOTES, 'UTF-8');?>
";
        var product_qty_update_success = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_qty_update_success']->value, ENT_QUOTES, 'UTF-8');?>
";
        var freeShippingTranslation = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free Shipping','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var noShippingRequired = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Delivery Method Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var ShippingRequired = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Method Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var paymentRequired = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method Required','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var updateSameQty = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No change found in quantity','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var scInvalidQty = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid Quantity','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var scOtherError = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Technical Error Occured. Please contact to support.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var commentInvalid = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message is in invalid format','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var tosRequire = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please acccept our terms & conditions before confirming your order','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var requestToLogin = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please login first','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var ajaxRequestFailedMsg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TECHNICAL ERROR- Request Failed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var validationfailedMsg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please provide required Information','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var totalVoucherText = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total Vouchers','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var tax_incl_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax incl.)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var tax_excl_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Tax excl.)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var update_text = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
       var kb_input_error_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Kindly input valid values in all required fields','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var idAddress_delivery = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_address_delivery']->value), ENT_QUOTES, 'UTF-8');?>
;
        var scp_use_taxes = 1;

        var scp_guest_tracking_url = "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("guest-tracking",true));?>
";		
        var scp_history_url = "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getPageLink("history",true));?>
";	
        var payment_content_id = 'center_column';
        var scp_required_tos = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['confirm']['term_condition'][$_smarty_tpl->tpl_vars['user_type']->value]['require']), ENT_QUOTES, 'UTF-8');?>
;
        var show_delivery_add_for_virtualcart = false;
        <?php if ($_smarty_tpl->tpl_vars['show_delivery_add_for_virtualcart']->value == true) {?>
            show_delivery_add_for_virtualcart = true;
        <?php }?>
        var is_virtual_cart = false;
        <?php if ($_smarty_tpl->tpl_vars['is_virtual_cart']->value == true) {?>
            is_virtual_cart = true;
        <?php }?>
        var cart_update_url = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart'),'quotes' )), ENT_QUOTES, 'UTF-8');?>
";
        var orderOpcUrl = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink("order-opc",true),'quotes' )), ENT_QUOTES, 'UTF-8');?>
";
        var button_background = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
";
        var required_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Required Field','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_email = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email is invalid','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var pwd_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Five characters minimum)','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_city = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Characters !<>;?=+@#"°{}_$% are not allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_address = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Characters !<>?=+@{}_$% are not allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_title = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Characters <>={} are not allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_number = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only +.-() and numbers are allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_other_info = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Characters <>{} are not allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_dob = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid Date of Birth','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_country_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid Country','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_state_msg = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid State','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var invalid_name = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name is invalid','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var number_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Numbers not allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var toc_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please acccept our terms & conditions before confirming your order','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var order_place_confirmation = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All the information provided by you are correct?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var splchar_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Characters !<>,;?=+()@#"°{}_$%: are not allowed','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        var inline_validation = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['inline_validation']['enable']), ENT_QUOTES, 'UTF-8');?>
;
        var street_number_warning = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Street Number in address is missing, are you sure you don\'t have one?','mod'=>'supercheckout'),$_smarty_tpl ) );?>
";
        <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['qty_update_option']) && $_smarty_tpl->tpl_vars['settings']->value['qty_update_option'] == 0) {?>
            var update_qty_button = 1;
        <?php } else { ?>
            var update_qty_button = 0;
        <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['enable'] == 1) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['api_key']) && $_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['api_key'] != '') {?>     
                var google_auto_address_api_key = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['api_key'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
            <?php }?>
        <?php }?>
                <?php if (isset($_smarty_tpl->tpl_vars['guest_information']->value) && $_smarty_tpl->tpl_vars['guest_information']->value != '') {?>
            var guest_information = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['guest_information']->value;?>
');         <?php }?>            
        <?php echo urldecode($_smarty_tpl->tpl_vars['settings']->value['custom_js']);?>
      <?php echo '</script'; ?>
>
    <?php $_smarty_tpl->_assignInScope('login_boxes_width', intval(50));?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable'] || $_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable']) {?>
        <?php $_smarty_tpl->_assignInScope('login_boxes_width', 33);?>
    <?php }?>
    <style>
        
    .supercheckout_top_boxes{width:<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['login_boxes_width']->value), ENT_QUOTES, 'UTF-8');?>
%;}
    
    <?php echo urldecode($_smarty_tpl->tpl_vars['settings']->value['custom_css']);?>

        #supercheckout-fieldset .orangebutton {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php } else { ?>
            background : #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
            <?php }?>

        border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
        color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
        border-bottom:3px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['border_bottom_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
        }
        #supercheckout-fieldset .orangebutton:hover {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php }?>

        border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
        border-bottom:3px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['border_bottom_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    #supercheckout-fieldset .orangebuttonsmall {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php } else { ?>
            background : #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
            <?php }?>

        border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
        color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    #supercheckout-fieldset .orangebuttonsmall:hover {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php }?>

        border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    #shipping_address_table td {
vertical-align: top;
}
#payment_address_table td {
vertical-align: top;
}
    #supercheckout-fieldset .orangebuttonapply {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
; 
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php } else { ?>
        background : #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>

         border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
         color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    #supercheckout-fieldset .orangebuttonapply:hover {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php }?>

        border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    
    .divkbmobilelogin .orangebuttonapply {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
; 
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php } else { ?>
        background : #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>

         border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
         color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
        .divKbgiftMessage .orangebuttonapply {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
; 
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F77219 1%, #FEC6A7 3%, #F77219 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php } else { ?>
        background : #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>

         border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
         color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_text_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
        .divkbmobilelogin .orangebuttonapply:hover {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php }?>

        border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
        .divKbgiftMessage .orangebuttonapply:hover {
        background-color:#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'], ENT_QUOTES, 'UTF-8');?>
;
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_color'] == 'F77219') {?>
        background: linear-gradient(to bottom, #F28941 1%, #FEC6A7 3%, #F28941 7%, #F75B16 100%) repeat scroll 0 0 rgba(0, 0, 0, 0) !important;
        <?php }?>

        border: 1px solid #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customizer']['button_border_color'], ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    
    </style>
    <?php if ((isset($_smarty_tpl->tpl_vars['mobileLoginActive']->value) && ($_smarty_tpl->tpl_vars['mobileLoginActive']->value == 1))) {?>
    <style>
        /* For Firefox */
        input[type='number'] {
            -moz-appearance:textfield;
        }
        /* Webkit browsers like Safari and Chrome */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .kb-help-block{
            margin-top: 5px;
        }
    </style>
    <?php }?>
                <a style="display:none;" href="javascript:void(0)" id="bancasella_process_payment" ></a>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);?><span class="navigation_page"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <div id="fb-root"></div>
    <div id="supercheckout-empty-page-content" class="supercheckout-empty-page-content" style="display:block">
    <?php if (isset($_smarty_tpl->tpl_vars['velsof_errors']->value) && count($_smarty_tpl->tpl_vars['velsof_errors']->value) > 0) {?>

        <div class="permanent-warning">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['velsof_errors']->value, 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['err']->value, ENT_QUOTES, 'UTF-8');?>
<br>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div>
    <?php }?>
    </div>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentTop'),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <form id="velsof_supercheckout_form" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8');?>
" method="POST" onsubmit=" return isPressedEnter(this)">
        <input type='hidden' name='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['plugin_name']->value, ENT_QUOTES, 'UTF-8');?>
PlaceOrder' value='1' />
    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['html_value']['header']) && $_smarty_tpl->tpl_vars['settings']->value['html_value']['header'] != '') {?>
                <div id="supercheckout_html_content_header">        
                    <?php echo $_smarty_tpl->tpl_vars['settings']->value['html_value']['header'];?>
                </div>
    <?php }?>
    <div id="submission_progress_overlay" class="submit_progress_disable"></div>
    <div id="supercheckout_order_progress_bar">
        <div class="supercheckout_order_progress_status">
            <div id="supercheckout_order_progress_status_text">20%</div>
            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_image_path']->value, ENT_QUOTES, 'UTF-8');?>
progress.gif" />
                    
        </div>
    </div>
    <fieldset class="group-select" id="supercheckout-fieldset">
        <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?> 
            <?php if (isset($_smarty_tpl->tpl_vars['mobileLoginActive']->value) && ($_smarty_tpl->tpl_vars['mobileLoginActive']->value == 1)) {?>
                
                <div id="divkbmobilelogin" style="display:none" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login/Register With Mobile Number','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" class="supercheckout-threecolumns divkbmobilelogin">
                <div class="velsof_sc_overlay" style="display: block;"></div>
                    <div id="supercheckout-option" style="display:<?php if ((($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_otp'] == 1) || ($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_mobile'] == 1)) && ($_smarty_tpl->tpl_vars['mobile_login_setting']->value['show_mobile_on_registration'] == 1)) {?>block<?php } else { ?>none<?php }?>">
                    <?php if (($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_otp'] == 1) || ($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_mobile'] == 1)) {?>
                        <div class="supercheckout-extra-wrap">
                            <input type="radio" name="mobile_option" value="0" id="mobile_login_checkout" checked="checked" >
                            <label for="mobile_login_checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login into shop','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                            <br>
                        </div>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['mobile_login_setting']->value['show_mobile_on_registration'] == 1)) {?>
                        <div class="supercheckout-extra-wrap">
                            <input type="radio" name="mobile_option" value="1" id="mobile_register_checkout" <?php if (($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_otp'] != 1) && ($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_mobile'] != 1)) {?> checked="checked" <?php }?>>
                            <label for="mobile_register_checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register new account','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                            <br>
                        </div>
                    <?php }?>

                </div>

                <div class="supercheckout-extra-wrap">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br>
                    <input type="text" id="mobile_firstname" name="supercheckout_mobile_firstname" value="" class="supercheckout-large-field">
                </div>
                <div class="supercheckout-extra-wrap">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br>
                    <input type="text" id="mobile_lastname" name="supercheckout_mobile_lastname" value="" class="supercheckout-large-field">
                </div>
                <div class="supercheckout-extra-wrap">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br>
                    <input type="text" id="mobile_email" name="supercheckout_mobile_email" value="" class="supercheckout-large-field">
                </div>
                <div class="supercheckout-extra-wrap">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br>
                    <select name="mobile_country" class="supercheckout-large-field">
                        <?php if (is_array($_smarty_tpl->tpl_vars['total_active_country']->value) && !empty($_smarty_tpl->tpl_vars['total_active_country']->value)) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['total_active_country']->value, 'country_details');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country_details']->value) {
?>
                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_details']->value['id_country'], ENT_QUOTES, 'UTF-8');?>
" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_details']->value['country'], ENT_QUOTES, 'UTF-8');?>
 (+<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country_details']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
) </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <?php }?>
                    </select>
                </div>
                <div class="supercheckout-extra-wrap">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Number','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br>
                    <input type="number" id="mobile_number" name="supercheckout_mobile_number" style="width:auto;" value="" class="supercheckout-large-field">
                    <span class="mobile_send_otp">
                        <input id="mobile_send_otp" type="button" onclick="sendOtp();" class="orangebuttonapply" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send OTP','mod'=>'supercheckout'),$_smarty_tpl ) );?>
">
                    </span>
                </div>    
                <div id="supercheckout-option" <?php if (($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_otp'] == 1) && ($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_mobile'] == 1)) {?> style="display:-webkit-box;" <?php } else { ?> style="display:none;" <?php }?>>
                    <div class="supercheckout-extra-wrap" >
                        <input type="radio" name="password_option" value="0" id="login_password" <?php if (($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_mobile'] == 1)) {?>checked="checked"<?php }?>>
                        <label for="login_password"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                        <br>
                    </div>
                    <div class="supercheckout-extra-wrap">
                        <input type="radio" name="password_option" value="1" id="login_otp" <?php if (($_smarty_tpl->tpl_vars['mobile_login_setting']->value['login_by_mobile'] != 1)) {?>checked="checked"<?php }?>>
                        <label for="login_otp"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OTP','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                        <br>
                    </div>                 
                </div>
                <div class="supercheckout-extra-wrap">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OTP','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br>
                    <input type="number" id="mobile_otp" name="supercheckout_mobile_otp" value="" style="width:auto;" class="supercheckout-large-field">
                    <span class="mobile_verify_otp">
                        <input id="mobile_verify_otp" type="button" onclick="verfyOtp();" class="orangebuttonapply" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Verify OTP','mod'=>'supercheckout'),$_smarty_tpl ) );?>
">
                    </span>

                </div>
                <div class="supercheckout-extra-wrap">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br>
                    <input type="password" id="mobile_Password" name="supercheckout_mobile_Password" value="" class="supercheckout-large-field">
                </div>
                <div class="supercheckout-extra-wrap">
                    <input id="mobile_login" type="button" onclick="MobileLogin();" class="orangebuttonapply" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'LOGIN','mod'=>'supercheckout'),$_smarty_tpl ) );?>
">
                </div>
                <div class="supercheckout-extra-wrap">
                    <input id="mobile_register" type="button" onclick="MobileRegister();" class="orangebuttonapply" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'REGISTER','mod'=>'supercheckout'),$_smarty_tpl ) );?>
">
                </div>
            </div>
            <?php }?> 
        <?php }?>
        <div class="supercheckout-threecolumns supercheckout-container supercheckout-skin-generic " id="supercheckout-columnleft">

            <?php $_smarty_tpl->_assignInScope('layout_name', '1_column');?>
            <?php $_smarty_tpl->_assignInScope('multiplier', 1);?>
            <?php $_smarty_tpl->_assignInScope('multiplier_3', 0.98);?>
            <?php $_smarty_tpl->_assignInScope('multiplier_2', 0.99);?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['layout'] == 3) {?>
                <?php $_smarty_tpl->_assignInScope('layout_name', '3_column');?>
                <?php $_smarty_tpl->_assignInScope('multiplier', $_smarty_tpl->tpl_vars['multiplier_3']->value);?>
            <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['layout'] == 2) {?>
                <?php $_smarty_tpl->_assignInScope('layout_name', '2_column');?>
                <?php $_smarty_tpl->_assignInScope('multiplier', $_smarty_tpl->tpl_vars['multiplier_2']->value);?>
            <?php }?>

            
            <div class="supercheckout-column-left columnleftsort" id="columnleft-1" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value][1]*$_smarty_tpl->tpl_vars['multiplier']->value, ENT_QUOTES, 'UTF-8');?>
%"> 
                <div  class="supercheckout-blocks" data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['login'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['login'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['login'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
"  >
                    <ul class="headingCheckout">
                        <li>
                            <p class="supercheckout-numbers supercheckout-numbers-1">
                                <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome','mod'=>'supercheckout'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer_name']->value, ENT_QUOTES, 'UTF-8');?>

                                <?php } else { ?>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login Options','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                <?php }?>
                            </p>
                            <?php if (!$_smarty_tpl->tpl_vars['logged']->value) {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['mobileLoginActive']->value) && ($_smarty_tpl->tpl_vars['mobileLoginActive']->value == 1)) {?>
                                    <span>
                                        <a href="javascript:void(0)" onclick="showMobileLoginPopup()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login/Register with mobile','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a>
                                    </span>
                                <?php }?>
                            <?php }?>

                        </li>
                    </ul>
                    <div id="checkoutLogin">
                        <div class="supercheckout-checkout-content"></div>
                        <?php $_smarty_tpl->_subTemplateRender('module:supercheckout/views/templates/front/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>     
                </div>
                <div class="supercheckout-blocks" data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
">
                    <?php if ($_smarty_tpl->tpl_vars['show_delivery_add_for_virtualcart']->value == true) {?>
                        <div id="checkoutShippingAddress" style="display:none;">
                            <div class="velsof_sc_overlay"></div>
                        </div> 
                    <?php } else { ?>
                        <div id="checkoutShippingAddress">
                            <div class="velsof_sc_overlay"></div>
                            <?php $_smarty_tpl->_subTemplateRender('module:supercheckout/views/templates/front/shipping_address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>
                    <?php }?>
                </div>
                <div  class="supercheckout-blocks"  data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_address'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
">
                    <div id="checkoutBillingAddress" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['use_delivery_for_payment_add'][$_smarty_tpl->tpl_vars['user_type']->value]) {?>none<?php } else { ?>block<?php }?>;">
                        <div class="velsof_sc_overlay"></div>
                        <?php $_smarty_tpl->_subTemplateRender('module:supercheckout/views/templates/front/payment_address.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    </div>
                    <br/>
                    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['enable_save_address']) && $_smarty_tpl->tpl_vars['settings']->value['enable_save_address'] == 1) {?>
                        <div id="supercheckout_save_address_button" style="display:none;">
                            <!-- Code Modified by Raghu on 22-Aug-2017 for fixing 'Save Button Translation' issue -->
                            <input type="button" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="supercheckout_save_address" class="orangebuttonsmall">
                        </div>
                    <?php }?>
                </div>            

                <div style="<?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_method']['enable'] == 0) {?>display:none;<?php }?>"  class="supercheckout-blocks" data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['shipping_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
" >
                    <ul>
                        <li style="display:inline;">
                            <p class="supercheckout-numbers supercheckout-numbers-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                            <div class="loader" id="shippingMethodLoader"></div>
                        </li>                
                    </ul>
                    <div id="shipping_method_update_warning" class="supercheckout-checkout-content"></div>
                    <div id="shipping-method">
                                            </div>
                </div>

                <div style="<?php if ($_smarty_tpl->tpl_vars['settings']->value['payment_method']['enable'] == 0) {?>display:none;<?php }?>" class="supercheckout-blocks" data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['payment_method'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
">
                    <ul>
                        <li>
                            <p class="supercheckout-numbers supercheckout-numbers-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                            <div class="loader" id="paymentMethodLoader"></div>
                        </li>                
                    </ul>
                    <div id="payment_method_update_warning" class="supercheckout-checkout-content"></div>
                    <div id="payment-method">
                                            </div>
                </div>
                <div class="supercheckout-blocks confirmCheckoutBack" data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['cart'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['cart'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['cart'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['display_cart'] == 1) {?>block<?php } else { ?>none<?php }?>;">
                    <ul>
                        <li>
                            <p class="supercheckout-numbers supercheckout-check"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm Your Order','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
                            <div class="loader" id="confirmLoader"></div>
                        </li>
                    </ul>
                    <div id="cart_update_warning" class="supercheckout-checkout-content"></div>
                    <div id="confirmCheckout">
                                            </div>
                </div>

                <div class="supercheckout-blocks" data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['confirm'][$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['confirm'][$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['design']['confirm'][$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
" >
                    <div class="supercheckout-checkout-content"> </div>
                    <div id="supercheckout-comments" style="display:<?php if ($_smarty_tpl->tpl_vars['logged']->value) {
if ($_smarty_tpl->tpl_vars['settings']->value['confirm']['order_comment_box']['logged']['display'] == 1) {?>block<?php } else { ?>none<?php }
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['confirm']['order_comment_box']['guest']['display'] == 1) {?>block<?php } else { ?>none<?php }
}?>;">
                        <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add Comments About Your Order','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b>
                        <textarea id="supercheckout-comment_order" name="comment" rows="8" ></textarea>
                    </div>

                        <div id='order-shipping-extra'>
                            <?php $_smarty_tpl->_subTemplateRender('module:supercheckout/views/templates/front/order_extra_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        </div>

                    <div id="placeorderButton">
                        <div id="buttonWithProgres" style="width:206px;">
                            <div  id="supercheckout_confirm_order" class="orangebutton" >
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Place Order','mod'=>'supercheckout'),$_smarty_tpl ) );?>

                                <div id="progressbar" style="text-align:center;margin-top: 0px;"></div>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="supercheckout_submission" value="" />
                </div>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['design']['html'], 'html');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['html']->value) {
?>
                    <div  class="supercheckout-blocks" data-column="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['html']->value[$_smarty_tpl->tpl_vars['layout_name']->value]['column']), ENT_QUOTES, 'UTF-8');?>
" data-row="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['html']->value[$_smarty_tpl->tpl_vars['layout_name']->value]['row']), ENT_QUOTES, 'UTF-8');?>
" data-column-inside="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['html']->value[$_smarty_tpl->tpl_vars['layout_name']->value]['column-inside']), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo $_smarty_tpl->tpl_vars['html']->value['value'];?>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <div class="supercheckout-column-middle columnleftsort" id="columnleft-2"  style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value][2]*$_smarty_tpl->tpl_vars['multiplier']->value, ENT_QUOTES, 'UTF-8');?>
%;margin-right:0px;">
                <div class="supercheckout-column-left columnleftsort" id="column-2-upper" style="width:100%;height:auto;"> 
                </div>
                <div class="supercheckout-column-left columnleftsort" id="column-1-inside" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value]['inside'][1]*1, ENT_QUOTES, 'UTF-8');?>
%"> 
                </div>
                <div class="supercheckout-column-left columnleftsort" id="column-2-inside"  style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value]['inside'][2]*1, ENT_QUOTES, 'UTF-8');?>
%">

                </div>
                <div class="supercheckout-column-left columnleftsort" id="column-2-lower"  style="width:100%;height:auto;">

                </div>
            </div>
            <div class="supercheckout-column-right columnleftsort" id="columnleft-3" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['column_width'][$_smarty_tpl->tpl_vars['layout_name']->value][3]*$_smarty_tpl->tpl_vars['multiplier']->value, ENT_QUOTES, 'UTF-8');?>
%">


            </div>   

        </div>
    <input type="hidden" id="module_url" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supercheckout_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
" />    
    <input type="hidden" id="addon_url" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['addon_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
" />  
    <input type="hidden" id="analytic_url" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['analytic_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
" />    
    </fieldset>
    </form>
        <div id="velsof_payment_dialog">
            <div id="velsof_dialog_content">
                <div class="velsof_payment_dialog_overlay"></div>
                <div id="velsof_payment_container">
                    <!--<span class="velsof_dialog_close">X</span>-->
                    <div class="velsof_title_section"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Information','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
                    <div class="velsof_content_section"></div>
                </div>            
            </div>
        </div>
    <?php if (isset($_smarty_tpl->tpl_vars['settings']->value['html_value']['footer']) && $_smarty_tpl->tpl_vars['settings']->value['html_value']['footer'] != '') {?>
        <div id="supercheckout_html_content_footer">        
            <?php echo $_smarty_tpl->tpl_vars['settings']->value['html_value']['footer'];?>
        </div>
    <?php }?>

    <?php echo '<script'; ?>
>
        var default_country = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['default_country']->value, ENT_QUOTES, 'UTF-8');?>
;
        var js_countries = '<?php echo addslashes(json_encode($_smarty_tpl->tpl_vars['countries']->value));?>
';
        var countries = JSON.parse(js_countries);
        delete js_countries;
        var allowed_countries=[];
        for (var country in countries) {
            if (country == default_country) {
                allowed_countries.push(countries[country].iso_code);
            }
        }
        var page_lang_code =  "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iso_code']->value, ENT_QUOTES, 'UTF-8');?>
";
        
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['mailchimp']['enable'] == 1 && isset($_smarty_tpl->tpl_vars['settings']->value['mailchimp']['default']) && $_smarty_tpl->tpl_vars['settings']->value['mailchimp']['default'] == 1) {?>
            var supercheckout_subscribe_mailchimp = true;
        <?php }?>
    <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['enable'] == 1) {
echo '<script'; ?>
>    
    window.onload = function(e){     
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key="+google_auto_address_api_key+"&libraries=places&callback=initAutocomplete";
    document.getElementsByTagName('script')[0].parentNode.appendChild(script);
    }
    
<?php echo '</script'; ?>
>  

<?php echo '<script'; ?>
>      
    var placeSearch; 
    var autocomplete = {};  
    var autocompleteLsr = {};  
    // Create the autocomplete object, restricting the search to geographical
    // location types.     
    var autocompletesWraps = [{name:['shipping_address_address1', 'shipping_address_address2'],form:'shipping-new'},{name:['payment_address_address1','payment_address_address2'], form:'payment-new'}];     
    var shipping_address_address1_field = { street_number: 'short_name', route: 'long_name', locality: 'long_name', administrative_area_level_1: 'short_name', country: 'short_name', postal_code: 'short_name' };
    var shipping_address_address2_field = { street_number: 'short_name', route: 'long_name', locality: 'long_name', administrative_area_level_1: 'short_name', country: 'short_name', postal_code: 'short_name' };
    var payment_address_address1_field = { street_number: 'short_name', route: 'long_name', locality: 'long_name', administrative_area_level_1: 'short_name', country: 'short_name', postal_code: 'short_name' };
    var payment_address_address2_field = { street_number: 'short_name', route: 'long_name', locality: 'long_name', administrative_area_level_1: 'short_name', country: 'short_name', postal_code: 'short_name' };
    
    window.gm_authFailure = function() {        
        $('#supercheckout-empty-page-content').html('<div class="permanent-warning">'+ google_auto_fill_warning + '</div>');
        $("#shipping_address_address1").prop('disabled', false);
        $("#shipping_address_address1").removeAttr('placeholder');
        $("#shipping_address_address1").css('background-image', 'none');

        $("#shipping_address_address2").prop('disabled', false);
        $("#shipping_address_address2").removeAttr('placeholder');
        $("#shipping_address_address2").css('background-image', 'none');
                
        $("#payment_address_address1").prop('disabled', false);
        $("#payment_address_address1").removeAttr('placeholder');
        $("#payment_address_address1").css('background-image', 'none');

        $("#payment_address_address2").prop('disabled', false);
        $("#payment_address_address2").removeAttr('placeholder');
        $("#payment_address_address2").css('background-image', 'none');
        
        // Start Code Added by Priyanshu on 07-April-2018
        $.each(autocompletesWraps, function(index, wraps) {
            $.each(wraps.name, function(index, name) {                
                google.maps.event.removeListener(autocompleteLsr[name]);
                google.maps.event.clearInstanceListeners($('#'+name+'.autocomplete')[0]);
            });
        });
        // End code
    }

    function initAutocomplete() {
        $.each(autocompletesWraps, function(index, wraps) {
            $.each(wraps.name, function(index, name) {
                if($('#'+name).length == 0) {
                        return;
                }
                autocomplete[name] = new google.maps.places.Autocomplete($('#'+name+'.autocomplete')[0], { types: ['geocode'],componentRestrictions: { 'country' : allowed_countries } });                                
                autocompleteLsr[name] = google.maps.event.addListener(autocomplete[name], 'place_changed', function() {  

                    var place = autocomplete[name].getPlace();
                    var field = eval(name+'_field');

                    for (var component in field) {
                        $('#'+wraps.form+' .'+component).val('');
                        $('#'+wraps.form+' .'+component).attr('disabled', false);
                    }

                    for (var i = 0; i < place.address_components.length; i++) {
                        var addressType = place.address_components[i].types[0];                                                
                        if (typeof field[addressType] !== 'undefined') {                                                    
                            var val = place.address_components[i][field[addressType]];                                                 
                            $('#'+wraps.form+' .'+addressType).val(val);                                                  
                            if(addressType=='postal_code'){                
                                if(wraps.form=='payment-new'){
                                    $( 'input[name="payment_address[postcode]"]' ).trigger( "blur" );
                                } else if(wraps.form=='shipping-new'){
                                    $( 'input[name="shipping_address[postcode]"]' ).trigger( "blur" );
                                }
                            } else if(addressType=='street_number') {
                                if(wraps.form=='payment-new'){
                                    $( 'input[name="payment_address[address1]"]' ).trigger( "blur" );           
                                } else if(wraps.form=='shipping-new'){
                                    $( 'input[name="shipping_address[address1]"]' ).trigger( "blur" );           
                                }
                            } else if(addressType=='route') {
                                if(wraps.form=='payment-new'){
                                    $( 'input[name="payment_address[address2]"]' ).trigger( "blur" );           
                                } else if(wraps.form=='shipping-new'){
                                    $( 'input[name="shipping_address[address2]"]' ).trigger( "blur" );           
                                }                                                    
                            } else if(addressType=='locality') {
                                if(wraps.form=='payment-new'){
                                    $( 'input[name="payment_address[city]"]' ).trigger( "blur" );          
                                } else if(wraps.form=='shipping-new'){
                                    $( 'input[name="shipping_address[city]"]' ).trigger( "blur" );       
                                }
                            } else if(addressType=='country'){
                                $('#'+wraps.form+' option[id='+val+']').attr('selected','selected');
                                if(wraps.form=='payment-new'){
                                    $( 'select[name="payment_address[id_country]"]' ).trigger( "change" );
                                } else if(wraps.form=='shipping-new'){
                                    $( 'select[name="shipping_address[id_country]"]' ).trigger( "change" );
                                }

                                var state_fetched = $('#'+wraps.form+' .administrative_area_level_1').val();                                                         
                                var reg = /^\b[a-zA-Z0-9_]+\b$/;
                                if (reg.test(state_fetched)) {                                                            
                                    $('#'+wraps.form+' option[id='+state_fetched+']').attr('selected','selected');
                                    if(wraps.form=='payment-new'){                                                            
                                        $( 'select[name="payment_address[id_state]"]' ).trigger( "change" );
                                    } else if(wraps.form=='shipping-new'){                                                            
                                        $( 'select[name="shipping_address[id_state]"]' ).trigger( "change" );
                                    }
                                }                
                            }  
                        }
                    }
                });
            });
        });         
    }      

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        $.each(autocompletesWraps, function(index, wraps) {
            $.each(wraps.name, function(index, name) {
                if (navigator.geolocation) {
                  navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                      lat: position.coords.latitude,
                      lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                      center: geolocation,
                      radius: position.coords.accuracy
                    });
                    autocomplete[name].setBounds(circle.getBounds());
                  });
                }
            });
        });
    }
<?php echo '</script'; ?>
>

    <?php }?>
    <?php } else { ?>
    <div class="supercheckout-empty-page-content" style="display:block">
        <div class="permanent-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your shopping cart is empty.','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</div>
    </div>
        <?php echo '<script'; ?>
>
            var cart_empty = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['empty']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php echo '</script'; ?>
>
    <?php }?>    
<?php
}
}
/* {/block 'content'} */
}
