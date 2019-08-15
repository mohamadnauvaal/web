<?php
/* Smarty version 3.1.33, created on 2019-08-12 10:11:15
  from 'module:iqitwishlistviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d50d8d31fe847_23506698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e921d51c062189725606e51308456f33ad945843' => 
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
function content_5d50d8d31fe847_23506698 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/hammerstoutdenim/public_html/modules/iqitwishlist/views/templates/hook/product-miniature.tpl -->
<?php if (isset($_smarty_tpl->tpl_vars['id_product_attribute']->value)) {?>
<a href="#" class="btn-iqitwishlist-add js-iqitwishlist-add"  data-id-product="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product']->value), ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_product_attribute']->value), ENT_QUOTES, 'UTF-8');?>
"
   data-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitwishlist','controller'=>'actions'),$_smarty_tpl ) );?>
" data-toggle="tooltip" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to wishlist','mod'=>'iqitwishlist'),$_smarty_tpl ) );?>
">
    <i class="fa fa-heart-o not-added" aria-hidden="true"></i> <i class="fa fa-heart added" aria-hidden="true"></i>
</a>
<?php }?><!-- end /home/hammerstoutdenim/public_html/modules/iqitwishlist/views/templates/hook/product-miniature.tpl --><?php }
}
