<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:20
  from '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/hook/gdpr_policy_setting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d914dc7475_30560119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be350604321b51744546c25a8988f6d11ac10637' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/modules/supercheckout/views/templates/hook/gdpr_policy_setting.tpl',
      1 => 1550240202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d914dc7475_30560119 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['supercheckout_gdpr_setting']->value) && !empty($_smarty_tpl->tpl_vars['supercheckout_gdpr_setting']->value)) {?>
    <div id="supercheckout-policy">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['supercheckout_gdpr_setting']->value, 'gdpr_setting');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gdpr_setting']->value) {
?>
            <div>
                <label>
                    <input id="kb_super_policy_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['gdpr_setting']->value['policy_id']), ENT_QUOTES, 'UTF-8');?>
" class="" type="checkbox" name="kb_super_policy[<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['gdpr_setting']->value['policy_id']), ENT_QUOTES, 'UTF-8');?>
]" value="1"/>
                    <?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['url'] != '') {?>
                        <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gdpr_setting']->value['url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="<?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['is_manadatory'] == 1) {?> required_policy <?php }?>" style="text-decoration:none !important;" rel="nofollow">
                            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gdpr_setting']->value['description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['is_manadatory']) {?>
                            <span style="display:inline;" class="supercheckout-required">*</span>
                        <?php }?>
                    <?php } else { ?>
                        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gdpr_setting']->value['description'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['gdpr_setting']->value['is_manadatory']) {?>
                            <span style="display:inline;" class="supercheckout-required">*</span>
                        <?php }?>
                    <?php }?>

                </label>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
