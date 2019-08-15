<?php
/* Smarty version 3.1.33, created on 2019-08-15 12:45:24
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f1746d2932_79839220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72be192e406191c1cad554abe284e159adeb4234' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1564553585,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54f1746d2932_79839220 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="header-user-btn" class="col col-auto header-btn-w header-user-btn-w">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>

        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
           rel="nofollow" class="header-btn header-user-btn">
            <i class="fa fa-user fa-fw icon" aria-hidden="true"></i>
            <span class="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customer']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
    <?php } else { ?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
           rel="nofollow" class="header-btn header-user-btn">
            <i class="fa fa-user fa-fw icon" aria-hidden="true"></i>
            <span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
        </a>
    <?php }?>
</div>
<?php }
}
