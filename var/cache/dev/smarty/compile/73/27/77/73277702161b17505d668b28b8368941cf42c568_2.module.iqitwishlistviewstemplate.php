<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:12:20
  from 'module:iqitwishlistviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d9147fb256_72866954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73277702161b17505d668b28b8368941cf42c568' => 
    array (
      0 => 'module:iqitwishlistviewstemplate',
      1 => 1564553584,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d50d9147fb256_72866954 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/hammerstoutdenim/public_html/modules/iqitwishlist/views/templates/hook/display-nav.tpl --><div class="d-inline-block">
    <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitwishlist','controller'=>'view'),$_smarty_tpl ) );?>
">
        <i class="fa fa-heart-o" aria-hidden="true"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
 (<span
                id="iqitwishlist-nb"></span>)
    </a>
</div>
<!-- end /home/hammerstoutdenim/public_html/modules/iqitwishlist/views/templates/hook/display-nav.tpl --><?php }
}
