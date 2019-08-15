<?php
/* Smarty version 3.1.33, created on 2019-08-15 10:56:47
  from 'module:supercheckoutviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54d7ff6c3256_62054045',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a8c89b5cc25551a023bdd03fd7686fa7999fed' => 
    array (
      0 => 'module:supercheckoutviewstemplat',
      1 => 1550240200,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54d7ff6c3256_62054045 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <div class="myaccount">
        <ol class="rectangle-list">                            
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></li>
            <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sc_logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Logout','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></li>
            <div class="supercheckout-clear"></div>
        </ol>
            
        <!-- Start - Code to insert custom fields in registration form block -->
        <div class="div_custom_fields">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['position'] == 'customer_registration_block') {?>
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
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <!-- End - Code to insert custom fields in registration form block -->
            
    </div>
<?php } else { ?>
    <div class="supercheckout-extra-wrap">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br />
        <input type="text" id="email" name="supercheckout_email" value="" class="supercheckout-large-field" />
    </div>
    <div id="supercheckout-option" style="display:block">
        <div class="supercheckout-extra-wrap">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option'] == 0) {?>
                <input type="radio" name="checkout_option" value="0" id="logged_checkout" checked="checked"/>
            <?php } else { ?>
                <input type="radio" name="checkout_option" value="0" id="logged_checkout"/>
            <?php }?>
            <label for="logged_checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login into shop','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <br />
        </div>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['enable_guest_checkout'] == 1 && $_smarty_tpl->tpl_vars['guest_enable_by_system']->value) {?>
            <div class="supercheckout-extra-wrap">
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option'] == 1) {?>
                    <input type="radio" name="checkout_option" value="1" id="guest_checkout" checked="checked"/>
                <?php } else { ?>
                    <input type="radio" name="checkout_option" value="1" id="guest_checkout"/>
                <?php }?>
                <label for="guest_checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Checkout','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                <br />
            </div>
        <?php }?>
        <div class="supercheckout-extra-wrap">
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option'] == 2 || ($_smarty_tpl->tpl_vars['settings']->value['enable_guest_checkout'] == 0 && $_smarty_tpl->tpl_vars['settings']->value['checkout_option'] == 1)) {?>
                <input type="radio" name="checkout_option" value="2" id="register_checkout" checked="checked" />
            <?php } else { ?>
                <input type="radio" name="checkout_option" value="2" id="register_checkout" />
            <?php }?>
            <label for="register_checkout"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account for later use','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
            <br />
        </div>                    
    </div>
    
    <!-- INSERT INTO #REGISTRATION FORM -->    
    <!-- Start - Code to insert custom fields in registration form block -->
    <div class="div_custom_fields">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array_fields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['field']->value['position'] == 'customer_registration_block') {?>
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
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <!-- End - Code to insert custom fields in registration form block -->
            
    <div id="supercheckout-login-box" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option'] == 0) {?>block<?php } else { ?>none<?php }?>;">
        <div id="supercheckout-login-password-box" class="supercheckout-extra-wrap">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'supercheckout'),$_smarty_tpl ) );?>
<span class="supercheckout-required">*</span><br />
            <input type="password" id="password" name="supercheckout_password" onkeydown="checkAction(event)" value="" class="supercheckout-large-field" />
        </div>
        <div id="supercheckout-login-action" class="supercheckout-extra-wrap">
            <div id="forgotpasswordlink"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['forgotten_link']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot Password','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</a></div>
            <br>
            <input type="hidden" name="SubmitLogin" value="SubmitLogin" />
            <input type="button" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'supercheckout'),$_smarty_tpl ) );?>
" id="button-login" class="orangebuttonsmall" /><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_image_path']->value, ENT_QUOTES, 'UTF-8');?>
loading12.gif" style="display:none;"/><br />
        </div>                            
    </div>
    <div id="supercheckout-new-customer-form" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option'] != 0) {?>block<?php } else { ?>none<?php }?>;">
        <table id="customer_person_information_table" class="supercheckout-form" style="margin-bottom:0 !important;">
            <tr id="new_customer_password" class="sort_data"  data-percentage="0" style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['checkout_option'] == 2) {?>block<?php } else { ?>none<?php }?>;" >
                <td>
                    <div class="inline-fields" style="margin-right: 18px;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Password','mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<span style="display:inline;" class="supercheckout-required">*</span></div>
                    <div class="supercheckout-large-field">
                        <input type="password" id="password" name="customer_personal[password]" value="" class="supercheckout-large-field" />
                    </div>
                </td>
            </tr>
            <?php $_smarty_tpl->_assignInScope('counter', "0");?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['customer_personal'], 'cus_info_field', false, 'cus_per_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cus_per_info']->value => $_smarty_tpl->tpl_vars['cus_info_field']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value][$_smarty_tpl->tpl_vars['user_type']->value]['display'] == 1) {?>
                    <?php $_smarty_tpl->_assignInScope('counter', $_smarty_tpl->tpl_vars['counter']->value+1);?>
                    <tr class="sort_data"  data-percentage="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value]['sort_order']), ENT_QUOTES, 'UTF-8');?>
" >
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['cus_per_info']->value == 'id_gender') {?>
                                <div class="inline-fields" style="margin-right: 18px;"><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value]['title'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable1,'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require'] == 1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span></div>
                                <div class="supercheckout_personal_id_gender inline-fields supercheckout-large-field">
                                    <div class="">                                                        
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'gender', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['gender']->value) {
?>
                                            <div class="inline-fields" style="width: 50px;">
                                                <div style="display: inline-block;"><input type="radio" name="customer_personal[id_gender]" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['gender']->value->id), ENT_QUOTES, 'UTF-8');?>
" id="customer_gender_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['gender']->value->id), ENT_QUOTES, 'UTF-8');?>
" checked="checked"/></div>
                                                <label for="customer_gender_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['gender']->value->id), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gender']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</label>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['cus_per_info']->value == 'dob') {?>
                                <div class="inline-fields" style="margin-right: 18px;"><?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value]['title'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_prefixVariable2,'mod'=>'supercheckout'),$_smarty_tpl ) );?>
:<span style="display:<?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_personal'][$_smarty_tpl->tpl_vars['cus_per_info']->value][$_smarty_tpl->tpl_vars['user_type']->value]['require'] == 1) {?>inline<?php } else { ?>none<?php }?>;" class="supercheckout-required">*</span></div>                                                    
                                <div class="supercheckout_personal_dob inline-fields supercheckout-large-field">
                                    <div class="">
                                        <select name="customer_personal[dob_days]">
                                            <option value="">--</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
?>
                                                <option value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['day']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['day']->value), ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <select name="customer_personal[dob_months]">
                                            <option value="">--</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month_name', false, 'month_value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['month_value']->value => $_smarty_tpl->tpl_vars['month_name']->value) {
?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['month_value']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['month_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                        <select name="customer_personal[dob_years]">
                                            <option value="">--</option>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
?>
                                                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['year']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </select>
                                    </div>
                                </div>
                            <?php }?>
                        </td>
                    </tr>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['settings']->value['customer_subscription'], 'cus_info_field', false, 'cus_subs_info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cus_subs_info']->value => $_smarty_tpl->tpl_vars['cus_info_field']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['guest']['display'] == 1) {?>
                    <tr class="sort_data"  data-percentage="<?php ob_start();
echo htmlspecialchars($_smarty_tpl->tpl_vars['counter']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['sort_order']+$_prefixVariable3), ENT_QUOTES, 'UTF-8');?>
" >
                        <td>
                            <div class="input-box" >
                                <input type="checkbox" class="supercheckout_offers_option" name="customer_personal[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cus_subs_info']->value, ENT_QUOTES, 'UTF-8');?>
]" id="customer_personal_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cus_subs_info']->value, ENT_QUOTES, 'UTF-8');?>
"  <?php if ($_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['guest']['checked'] == 1) {?>checked="checked"<?php }?> >
                                <label for="customer_personal_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cus_subs_info']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['settings']->value['customer_subscription'][$_smarty_tpl->tpl_vars['cus_subs_info']->value]['title'],'mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
                            </div>
                        </td>
                    </tr>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
    </div>
        <div id="social_login_block" style="display: none;"><!-- Code Modified by Raghu on 22-Aug-2017 for fixing 'When we open the supercheckout page at front end then first the facebook button shows and then they disappeared.' issue -->
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable'] != 1 && $_smarty_tpl->tpl_vars['settings']->value['google_login']['enable'] != 1) {?>
                <div class="orSeparator vss_socialloginizer_buttons"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OR','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></div> <h3 class="vss_socialloginizer_buttons" id="ivss_socialloginizer_buttons"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                <?php if (isset($_smarty_tpl->tpl_vars['show_on_supercheckout']->value) && $_smarty_tpl->tpl_vars['show_on_supercheckout']->value == 'small_buttons') {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'customLoginizerShortCodeHook','size'=>'small'),$_smarty_tpl ) );?>

                <?php } elseif (isset($_smarty_tpl->tpl_vars['show_on_supercheckout']->value) && $_smarty_tpl->tpl_vars['show_on_supercheckout']->value == 'large_buttons') {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'customLoginizerShortCodeHook','size'=>'large'),$_smarty_tpl ) );?>

                <?php }?>
                <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable'] == 1 || $_smarty_tpl->tpl_vars['settings']->value['google_login']['enable'] == 1) {?>
                <div class="orSeparator"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OR','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</span></div>
                <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in with','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</h3>
                <div class="socialNetwork">
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['fb_login']['enable'] == 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['social_login_popup']['enable'] == 1) {?>
                            <a onclick="return !window.open(this.href, 'popup', 'width=450,height=300,left=500,top=500')" target="_blank" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supercheckout_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
&myfbLogin" class="fbButton" id="fb-auth" ></a>
                        <?php } else { ?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8');?>
&myfbLogin" class="fbButton" id="fb-auth" ></a>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['google_login']['enable'] == 1) {?>
                        <?php if ($_smarty_tpl->tpl_vars['settings']->value['social_login_popup']['enable'] == 1) {?>
                            <a onclick="return !window.open(this.href, 'popup', 'width=500,height=500,left=500,top=500')" target="_blank" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['supercheckout_url']->value,'quotes' )), ENT_QUOTES, 'UTF-8');?>
&myGoogleLogin" class="googleButton" ></a>
                        <?php } else { ?>
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['supercheckout_url']->value, ENT_QUOTES, 'UTF-8');?>
&myGoogleLogin" class="googleButton" ></a>
                        <?php }?>
                    <?php }?>
                    <div class="supercheckout-clear"></div>
                </div>
            <?php }?>
        </div>
<?php }?>
    <div style="display: none;">
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'DOB','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up for NewsLetter','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Special Offer','mod'=>'supercheckout'),$_smarty_tpl ) );?>
</label>
    </div>
<?php }
}
