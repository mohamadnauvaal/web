<?php
/* Smarty version 3.1.33, created on 2019-08-15 13:02:41
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/errors/_maintenance/_partials/maintenance-newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d54f5817f0d10_41775574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806cfb5d3e278eb42b04ec765ed425c373555719' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/errors/_maintenance/_partials/maintenance-newsletter.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d54f5817f0d10_41775574 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['widget_block'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyWidgetBlock'))) {
throw new SmartyException('block tag \'widget_block\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('widget_block', array('name'=>"ps_emailsubscription"));
$_block_repeat=true;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"ps_emailsubscription"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="maintenance-page-newsletter-wrapper">

        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
            <div class="maintenance-page-newsletter-alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
        <?php }?>

        <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('fc'=>'module','module'=>'iqitemailsubscriptionconf','controller'=>'subscription')),$_smarty_tpl ) );?>
"
              method="post">
            <div class="maintenance-page-newsletter">
                    <input
                            class="maintenance-page-newsletter-btn"
                            name="submitNewsletter"
                            type="submit"
                            value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                    >
                    <div class="input-wrapper">
                        <input
                                name="email"
                                type="email"
                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                        >
                    </div>
            </div>
                    <input type="hidden" name="action" value="0">
        </form>
    </div>
<?php $_block_repeat=false;
echo $_block_plugin1->smartyWidgetBlock(array('name'=>"ps_emailsubscription"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
