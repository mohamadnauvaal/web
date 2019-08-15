<?php
/* Smarty version 3.1.33, created on 2019-08-14 16:52:30
  from '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d53d9de523587_99683379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba8b94b763b73f5a22585151bbef8efd2e666262' => 
    array (
      0 => '/home/hammerstoutdenim/public_html/themes/warehouse/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1564553585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d53d9de523587_99683379 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
