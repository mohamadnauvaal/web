<?php
/* Smarty version 3.1.33, created on 2019-08-15 10:56:47
  from 'module:supercheckoutviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54d7ff803977_46119319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c471902baa78f539555f0658c7f2268ecc06bc90' => 
    array (
      0 => 'module:supercheckoutviewstemplat',
      1 => 1558525506,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54d7ff803977_46119319 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="supercheckout-checkout-content"></div>
<ul>
    <li>
        <p class="supercheckout-numbers supercheckout-numbers-ship"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</p>
    </li>
</ul>
<?php if (!isset($_smarty_tpl->tpl_vars['guest_information']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['customer']->value['addresses']) {?>
        <div class="supercheckout-extra-wrap">
            <input type="radio" name="shipping_address_value" value="0" id="shipping-address-existing" checked="checked" />
            <label for="shipping-address-existing"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use Existing Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
        </div>
        <div id="shipping-existing" class="styled-select">
            <select name="shipping_address_id" style="width: 92%; margin-bottom: 15px;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customer']->value['addresses'], 'shipping_addr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shipping_addr']->value) {
?>                                
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_addr']->value['id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['shipping_addr']->value['id'] == $_smarty_tpl->tpl_vars['id_address_delivery']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shipping_addr']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <div id="delivery_address_detail" class="supercheckout_address_detail"></div>
        </div>
        <div class="supercheckout-extra-wrap">
            <p>
                <input type="radio" name="shipping_address_value" value="1" id="shipping-address-new" />
                <label for="shipping-address-new"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use New Address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            </p>
        </div>
    <?php }
}?>
<div id="shipping-new" style="display: <?php if (isset($_smarty_tpl->tpl_vars['guest_information']->value)) {?>block<?php } elseif ($_smarty_tpl->tpl_vars['customer']->value['addresses']) {?>none<?php } else { ?>block<?php }?>;">
    <table class="supercheckout-form" id="shipping_address_table">
        <?php $_smarty_tpl->_assignInScope('display_row', '');?>
        <?php $_smarty_tpl->_assignInScope('google_region_type', '');?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['shipping_address'], 'p_address_field', false, 'p_address_key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p_address_key']->value => $_smarty_tpl->tpl_vars['p_address_field']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('display_row', '');?>
            <?php $_smarty_tpl->_assignInScope('google_region_type', '');?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'] == 1 || (isset($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['conditional']) && $_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['conditional'] == 1)) {?>
                <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'dni' && !$_smarty_tpl->tpl_vars['need_dni']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('display_row', 'display:none;');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'dni' && $_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'] == 0) {?>
                    <?php $_smarty_tpl->_assignInScope('display_row', 'display:none;');?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'vat_number' && $_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'] == 0) {?>
                    <?php $_smarty_tpl->_assignInScope('display_row', 'display:none;');?>
                <?php }?>
                <?php if (($_smarty_tpl->tpl_vars['p_address_key']->value == 'postcode' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'id_state' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'alias') && !$_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require'] && !$_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display']) {?>
                    <?php $_smarty_tpl->_assignInScope('display_row', 'display:none;');?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'postcode') {?>
                    <?php $_smarty_tpl->_assignInScope('google_region_type', 'postal_code');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address1') {?>
                    <?php $_smarty_tpl->_assignInScope('google_region_type', 'street_number');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address2') {?>
                    <?php $_smarty_tpl->_assignInScope('google_region_type', 'route');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'city') {?>
                    <?php $_smarty_tpl->_assignInScope('google_region_type', 'locality');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country') {?>
                    <?php $_smarty_tpl->_assignInScope('google_region_type', 'country');?>
                <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_state') {?>
                    <?php $_smarty_tpl->_assignInScope('google_region_type', 'administrative_area_level_1');?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_state') {?>
                    <?php echo '<script'; ?>
>var show_shipping_state = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'], ENT_QUOTES, 'UTF-8');?>
;<?php echo '</script'; ?>
>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'postcode') {?>
                    <?php echo '<script'; ?>
>var show_shipping_postcode = <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'], ENT_QUOTES, 'UTF-8');?>
;<?php echo '</script'; ?>
>
                    
                <?php }?>
                
                
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['html_format'] == 1) {?>
                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'postcode') {?>
                        <tr class="sort_data" id="shipping_post_code" data-percentage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order'], ENT_QUOTES, 'UTF-8');?>
" style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8');?>
" >
                        <?php } else { ?>
                        <tr class="sort_data" data-percentage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order'], ENT_QUOTES, 'UTF-8');?>
" style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8');?>
" >
                    <?php }?>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['title'], ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable4,'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:
                                        <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'vat_number') {?>
                                            <span style="display:<?php if ($_smarty_tpl->tpl_vars['need_vat']->value) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                                        <?php } else { ?>
                                            <span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require'] == 1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'id_state') {?>
                                            <input type='hidden' class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_region_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                                            <select name="shipping_address[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8');?>
]" class="supercheckout-large-field" <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country') {?> onchange="restrictAutofillbyCountry(this)" <?php }?>>
                                                <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country') {?>
                                                    <option value="0">--</option>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                                        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['id_country'], ENT_QUOTES, 'UTF-8');?>
"  id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
' <?php if ($_smarty_tpl->tpl_vars['country']->value['id_country'] == $_smarty_tpl->tpl_vars['default_country']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>                                        
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                                    <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select State','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                                <?php }?>                            
                                            </select>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'other') {?>
                                            <textarea name="shipping_address[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                                        <?php } else { ?>
                
                                            <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['enable'] == 1) {?>
                                                <input autocomplete="off" type="text"  <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address1' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'address2') {?> placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a location','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id='shipping_address_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'onFocus="geolocate()"<?php }?> name="shipping_address[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_region_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address1' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'address2') {?>autocomplete<?php }?>" />
                                                <?php } else { ?>
                                                <input autocomplete="off" type="text" name="shipping_address[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field" />
                                            <?php }?>
                                        <?php }?>
                                    </td>
                    
                <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['html_format'] == 2) {?>
                                             <td><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['title'], ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable5,'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:
                            <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'vat_number') {?>
                                <span style="display:<?php if ($_smarty_tpl->tpl_vars['need_vat']->value) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                            <?php } else { ?>
                                <span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require'] == 1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'id_state') {?>
                                <input type='hidden' class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_region_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                                <select name="shipping_address[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8');?>
]" class="supercheckout-large-field" <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country') {?> onchange="restrictAutofillbyCountry(this)" <?php }?>>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country') {?>
                                        <option value="0">--</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['id_country'], ENT_QUOTES, 'UTF-8');?>
"  id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
' <?php if ($_smarty_tpl->tpl_vars['country']->value['id_country'] == $_smarty_tpl->tpl_vars['default_country']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>                                        
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select State','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                    <?php }?>                            
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'other') {?>
                                <textarea name="shipping_address[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                            <?php } else { ?>
    
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['enable'] == 1) {?>
                                    <input autocomplete="off" type="text"  <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address1' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'address2') {?> placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a location','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id='shipping_address_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'onFocus="geolocate()"<?php }?> name="shipping_address[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_region_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address1' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'address2') {?>autocomplete<?php }?>" />
                                    <?php } else { ?>
                                    <input autocomplete="off" type="text" name="shipping_address[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field" />
                                <?php }?>
                            <?php }?>
                        </td>
                </tr>
                            </table>
                    </tr>
                        <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'postcode') {?>
                        <tr class="sort_data" id="shipping_post_code" data-percentage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order'], ENT_QUOTES, 'UTF-8');?>
" style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8');?>
" >
                        <?php } else { ?>
                        <tr class="sort_data" data-percentage="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['sort_order'], ENT_QUOTES, 'UTF-8');?>
" style="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['display_row']->value, ENT_QUOTES, 'UTF-8');?>
" >
                    <?php }?>
                        <td><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value]['title'], ENT_QUOTES, 'UTF-8');
$_prefixVariable6 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable6,'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:
                            <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'vat_number') {?>
                                <span style="display:<?php if ($_smarty_tpl->tpl_vars['need_vat']->value) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                            <?php } else { ?>
                                <span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['shipping_address'][$_smarty_tpl->tpl_vars['p_address_key']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require'] == 1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'id_state') {?>
                                <input type='hidden' class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_region_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                                <select name="shipping_address[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8');?>
]" class="supercheckout-large-field" <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country') {?> onchange="restrictAutofillbyCountry(this)" <?php }?>>
                                    <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'id_country') {?>
                                        <option value="0">--</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['id_country'], ENT_QUOTES, 'UTF-8');?>
"  id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
' <?php if ($_smarty_tpl->tpl_vars['country']->value['id_country'] == $_smarty_tpl->tpl_vars['default_country']->value) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['country']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>                                        
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select State','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</option>
                                    <?php }?>                            
                                </select>
                            <?php } elseif ($_smarty_tpl->tpl_vars['p_address_key']->value == 'other') {?>
                                <textarea name="shipping_address[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_address_key']->value, ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field" style="width: 96%;"></textarea>
                            <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_auto_address']['enable'] == 1) {?>
                                    <input autocomplete="off" type="text"  <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address1' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'address2') {?> placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter a location','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id='shipping_address_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
'onFocus="geolocate()"<?php }?> name="shipping_address[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['google_region_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['p_address_key']->value == 'address1' || $_smarty_tpl->tpl_vars['p_address_key']->value == 'address2') {?>autocomplete<?php }?>" />
                                    <?php } else { ?>
                                    <input autocomplete="off" type="text" name="shipping_address[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['p_address_key']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]" value="" class="supercheckout-large-field" />
                                <?php }?>
                            <?php }?>

                        </td>
                    </tr>
                <?php }?>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>    
    </table>
</div>

<!-- INSERT INTO #SHIPPING ADDRESS FORM -->
<!-- Start - Code to insert custom fields in shipping address form block -->
<div class="div_custom_fields">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['field']->value['position'] == 'shipping_address_form') {?>
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
<!-- End - Code to insert custom fields in shipping address form block -->
    
<ul>
    <li>
        <div class="input-box input-different-shipping" <?php if (!$_smarty_tpl->tpl_vars['settings']->value['show_use_delivery_for_payment_add'][$_smarty_tpl->tpl_vars['user_type']->value]) {?> style="display:none;" <?php }?>>
            <input type="checkbox" name="use_for_invoice" id="use_for_invoice" 
                   <?php if ($_smarty_tpl->tpl_vars['settings']->value['use_delivery_for_payment_add'][$_smarty_tpl->tpl_vars['user_type']->value]) {?>checked="checked"<?php }?>
                   >
            <label for="use_for_invoice"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Same invoice address','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</b></label>
        </div>
    </li>
</ul>
            
<div style="display: none;">
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First Name','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last Name','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vat Number','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Line 1','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Line 2','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Zip/Postal Code','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'City','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'State','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Identification Number','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home Phone','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mobile Phone','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address Title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other Information','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>                
</div>
<?php }
}
